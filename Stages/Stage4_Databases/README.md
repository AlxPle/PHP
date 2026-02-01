# Stage 4 — Working with Databases

> **Status:** 🚧 Not Started

## Goal
Master working with databases through PDO, prepared statements, and basic CRUD operations.

---

## Task Checklist

### Database Setup
- [ ] Install MySQL/MariaDB (or via Docker)
- [ ] Create a database
- [ ] Create a user with permissions
- [ ] Use phpMyAdmin or CLI
- [ ] Understand SQL queries (SELECT, INSERT, UPDATE, DELETE)

### PDO (PHP Data Objects)
- [ ] Connect to DB via PDO
- [ ] DSN (Data Source Name) string
- [ ] Handle connection errors
- [ ] Configure PDO (`ATTR_ERRMODE`, `ATTR_DEFAULT_FETCH_MODE`)
- [ ] Close connection

### Prepared Statements
- [ ] Why prepared statements are important (SQL injection)
- [ ] Positional placeholders (`?`)
- [ ] Named placeholders (`:name`)
- [ ] `prepare()`, `execute()`, `fetch()`
- [ ] `fetchAll()`, `rowCount()`

### CRUD Operations
- [ ] **Create** — INSERT queries
- [ ] **Read** — SELECT queries (one, all, with condition)
- [ ] **Update** — UPDATE queries
- [ ] **Delete** — DELETE queries
- [ ] Pagination (LIMIT, OFFSET)
- [ ] Sorting (ORDER BY)
- [ ] Filtering (WHERE, LIKE)

### Transactions
- [ ] `beginTransaction()`
- [ ] `commit()`
- [ ] `rollBack()`
- [ ] When to use transactions

---

## Mini Project: Notes App

### Features
- [ ] List notes with pagination
- [ ] Create a new note
- [ ] Edit a note
- [ ] Delete a note
- [ ] Search notes
- [ ] Categories/tags (optional)

### Database Schema

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

## File Structure

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

## Connection Example

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

## Resources

- [PHP Manual: PDO](https://www.php.net/manual/en/book.pdo.php)
- [PDO Tutorial](https://phpdelusions.net/pdo)
- [SQL Injection Prevention](https://cheatsheetseries.owasp.org/cheatsheets/SQL_Injection_Prevention_Cheat_Sheet.html)
- [MySQL Documentation](https://dev.mysql.com/doc/)

---

## Completion Criteria

- [ ] Can connect to DB via PDO
- [ ] Use only prepared statements
- [ ] Understand SQL injection and how to protect against it
- [ ] CRUD operations work
- [ ] Notes App is fully functional
