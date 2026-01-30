# Stage 4 — Working with Databases

> **Status:** 🚧 Not Started

## Цель этапа
Освоить работу с базами данных через PDO, prepared statements и базовые CRUD-операции.

---

## Чеклист задач

### Настройка базы данных
- [ ] Установка MySQL/MariaDB (или через Docker)
- [ ] Создание базы данных
- [ ] Создание пользователя с правами
- [ ] Использование phpMyAdmin или CLI
- [ ] Понимание SQL-запросов (SELECT, INSERT, UPDATE, DELETE)

### PDO (PHP Data Objects)
- [ ] Подключение к БД через PDO
- [ ] DSN (Data Source Name) строка
- [ ] Обработка ошибок подключения
- [ ] Настройка PDO (`ATTR_ERRMODE`, `ATTR_DEFAULT_FETCH_MODE`)
- [ ] Закрытие соединения

### Prepared Statements
- [ ] Почему prepared statements важны (SQL injection)
- [ ] Позиционные placeholders (`?`)
- [ ] Именованные placeholders (`:name`)
- [ ] `prepare()`, `execute()`, `fetch()`
- [ ] `fetchAll()`, `rowCount()`

### CRUD операции
- [ ] **Create** — INSERT запросы
- [ ] **Read** — SELECT запросы (один, все, с условием)
- [ ] **Update** — UPDATE запросы
- [ ] **Delete** — DELETE запросы
- [ ] Пагинация (LIMIT, OFFSET)
- [ ] Сортировка (ORDER BY)
- [ ] Фильтрация (WHERE, LIKE)

### Транзакции
- [ ] `beginTransaction()`
- [ ] `commit()`
- [ ] `rollBack()`
- [ ] Когда использовать транзакции

---

## Мини-проект: Notes App

### Функционал
- [ ] Список заметок с пагинацией
- [ ] Создание новой заметки
- [ ] Редактирование заметки
- [ ] Удаление заметки
- [ ] Поиск по заметкам
- [ ] Категории/теги (опционально)

### Схема базы данных

```sql
CREATE TABLE notes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);

CREATE TABLE note_categories (
    note_id INT,
    category_id INT,
    PRIMARY KEY (note_id, category_id),
    FOREIGN KEY (note_id) REFERENCES notes(id) ON DELETE CASCADE,
    FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE
);
```

---

## Структура файлов

```
Stage4_Databases/
├── README.md
├── src/
│   ├── 01_connection.php
│   ├── 02_prepared_statements.php
│   ├── 03_crud_create.php
│   ├── 04_crud_read.php
│   ├── 05_crud_update.php
│   ├── 06_crud_delete.php
│   ├── 07_transactions.php
│   └── 08_pagination.php
├── projects/
│   └── notes/
│       ├── index.php
│       ├── create.php
│       ├── edit.php
│       ├── delete.php
│       ├── search.php
│       ├── config/
│       │   └── database.php
│       ├── includes/
│       │   ├── header.php
│       │   └── footer.php
│       └── sql/
│           └── schema.sql
└── notes/
    └── sql_cheatsheet.md
```

---

## Пример подключения

```php
<?php
declare(strict_types=1);

$host = 'localhost';
$dbname = 'learning';
$username = 'root';
$password = '';

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]
    );
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
```

---

## Ресурсы

- [PHP Manual: PDO](https://www.php.net/manual/en/book.pdo.php)
- [PDO Tutorial](https://phpdelusions.net/pdo)
- [SQL Injection Prevention](https://cheatsheetseries.owasp.org/cheatsheets/SQL_Injection_Prevention_Cheat_Sheet.html)
- [MySQL Documentation](https://dev.mysql.com/doc/)

---

## Критерии завершения

- [ ] Могу подключиться к БД через PDO
- [ ] Использую только prepared statements
- [ ] Понимаю SQL injection и как защититься
- [ ] CRUD операции работают
- [ ] Notes App полностью функционален
