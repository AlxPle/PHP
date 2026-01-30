# Stage 6 — Projects (ToDo → ToDo API → Blog)

> **Status:** 🚧 Not Started

## Цель этапа
Применить все изученные навыки в реальных проектах, постепенно усложняя от классического веб-приложения до REST API.

---

## Project A: ToDo App (Classic Web)

### Описание
Классическое веб-приложение для управления задачами с HTML-формами и сессиями.

### Чеклист
- [ ] Настройка структуры проекта (PSR-4)
- [ ] Схема БД (tasks, users tables)
- [ ] Регистрация и авторизация
- [ ] Создание задачи
- [ ] Список задач (с фильтрами)
- [ ] Редактирование задачи
- [ ] Удаление задачи
- [ ] Отметка выполнения
- [ ] Валидация ввода
- [ ] Flash-сообщения

### Схема БД

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    is_completed BOOLEAN DEFAULT FALSE,
    due_date DATE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);
```

### Структура

```
todo-classic/
├── composer.json
├── public/
│   └── index.php
├── src/
│   ├── Controller/
│   │   ├── AuthController.php
│   │   └── TaskController.php
│   ├── Model/
│   │   ├── User.php
│   │   └── Task.php
│   ├── Repository/
│   │   ├── UserRepository.php
│   │   └── TaskRepository.php
│   └── Service/
│       └── AuthService.php
├── templates/
│   ├── layout.php
│   ├── auth/
│   └── tasks/
└── config/
    └── database.php
```

---

## Project B: ToDo API (REST)

### Описание
Преобразование ToDo App в REST API с JSON-ответами.

### Чеклист
- [ ] Простой роутер для API
- [ ] JSON responses с правильными headers
- [ ] `GET /api/tasks` — список задач
- [ ] `GET /api/tasks/{id}` — одна задача
- [ ] `POST /api/tasks` — создание
- [ ] `PUT /api/tasks/{id}` — обновление
- [ ] `DELETE /api/tasks/{id}` — удаление
- [ ] `PATCH /api/tasks/{id}/complete` — отметка выполнения
- [ ] Правильные HTTP статус-коды
- [ ] Обработка ошибок (JSON)
- [ ] Тестирование в Postman
- [ ] API документация (README)

### API Endpoints

| Method | Endpoint | Description | Status Codes |
|--------|----------|-------------|--------------|
| GET | /api/tasks | List all tasks | 200 |
| GET | /api/tasks/{id} | Get single task | 200, 404 |
| POST | /api/tasks | Create task | 201, 422 |
| PUT | /api/tasks/{id} | Update task | 200, 404, 422 |
| DELETE | /api/tasks/{id} | Delete task | 204, 404 |
| PATCH | /api/tasks/{id}/complete | Toggle complete | 200, 404 |

### Response Format

```json
{
    "success": true,
    "data": {
        "id": 1,
        "title": "Learn PHP",
        "is_completed": false
    }
}

{
    "success": false,
    "error": {
        "code": 404,
        "message": "Task not found"
    }
}
```

---

## Project C: Blog with API Backend

### Описание
Полноценный блог с API бэкендом и фронтендом, потребляющим этот API.

### Чеклист
- [ ] Схема БД (posts, users, categories, comments)
- [ ] REST API для всех сущностей
- [ ] JWT или session аутентификация
- [ ] Пагинация
- [ ] Фильтрация и сортировка
- [ ] Загрузка изображений
- [ ] Фронтенд на vanilla JS (fetch)
- [ ] Markdown поддержка (опционально)
- [ ] Комментарии
- [ ] Админ-панель

### Схема БД

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    role ENUM('user', 'author', 'admin') DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    slug VARCHAR(100) UNIQUE NOT NULL
);

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    category_id INT,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) UNIQUE NOT NULL,
    content TEXT NOT NULL,
    excerpt TEXT,
    image_path VARCHAR(255),
    status ENUM('draft', 'published') DEFAULT 'draft',
    published_at TIMESTAMP NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

CREATE TABLE comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    post_id INT NOT NULL,
    user_id INT NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (post_id) REFERENCES posts(id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES users(id)
);
```

### API Endpoints (Blog)

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | /api/posts | List posts (paginated) |
| GET | /api/posts/{slug} | Get single post |
| POST | /api/posts | Create post (auth) |
| PUT | /api/posts/{id} | Update post (auth) |
| DELETE | /api/posts/{id} | Delete post (auth) |
| GET | /api/categories | List categories |
| GET | /api/posts/{id}/comments | Get comments |
| POST | /api/posts/{id}/comments | Add comment (auth) |

---

## Структура Stage6

```
Stage6_Projects/
├── README.md
├── todo-classic/
│   └── ... (Project A)
├── todo-api/
│   └── ... (Project B)
└── blog/
    └── ... (Project C)
```

---

## Ресурсы

- [REST API Best Practices](https://restfulapi.net/)
- [HTTP Status Codes](https://httpstatuses.com/)
- [JWT Introduction](https://jwt.io/introduction)
- [Postman Learning](https://learning.postman.com/)

---

## Критерии завершения

### Project A (ToDo Classic)
- [ ] Полный CRUD через формы
- [ ] Авторизация работает
- [ ] Код структурирован по PSR-4

### Project B (ToDo API)
- [ ] Все endpoints работают
- [ ] Правильные HTTP коды
- [ ] Тесты в Postman проходят
- [ ] Есть API документация

### Project C (Blog)
- [ ] API + Frontend работают вместе
- [ ] Аутентификация реализована
- [ ] Пагинация работает
- [ ] Загрузка изображений работает
