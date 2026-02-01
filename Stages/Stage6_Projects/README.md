# Stage 6 — Projects (ToDo → ToDo API → Blog)

> **Status:** 🚧 Not Started

## Goal
Apply all learned skills in real projects, gradually increasing complexity from a classic web application to REST API.

---

## Project A: ToDo App (Classic Web)

### Description
A classic web application for task management with HTML forms and sessions.

### Checklist
- [ ] Настройка структуры проекта (PSR-4)
- [ ] Схема БД (tasks, users tables)
- [ ] Регистрация и авторизация
- [ ] Создание задачи
- [ ] Список задач (с фильтрами)
- [ ] Редактирование задачи
- [ ] Удаление задачи
- [ ] Отметка выполнения
- [ ] Input validation
- [ ] Flash messages

### Database Schema

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

### Structure

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

### Description
Transforming ToDo App into a REST API with JSON responses.

### Checklist
- [ ] Simple router for API
- [ ] JSON responses with proper headers
- [ ] `GET /api/tasks` — task list
- [ ] `GET /api/tasks/{id}` — single task
- [ ] `POST /api/tasks` — create
- [ ] `PUT /api/tasks/{id}` — update
- [ ] `DELETE /api/tasks/{id}` — delete
- [ ] `PATCH /api/tasks/{id}/complete` — mark as complete
- [ ] Proper HTTP status codes
- [ ] Error handling (JSON)
- [ ] Testing in Postman
- [ ] API documentation (README)

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

### Description
A full-featured blog with API backend and frontend consuming that API.

### Checklist
- [ ] Database schema (posts, users, categories, comments)
- [ ] REST API for all entities
- [ ] JWT or session authentication
- [ ] Pagination
- [ ] Filtering and sorting
- [ ] Image upload
- [ ] Frontend with vanilla JS (fetch)
- [ ] Markdown support (optional)
- [ ] Comments
- [ ] Admin panel

### Database Schema

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

## Stage6 Structure

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

## Resources

- [REST API Best Practices](https://restfulapi.net/)
- [HTTP Status Codes](https://httpstatuses.com/)
- [JWT Introduction](https://jwt.io/introduction)
- [Postman Learning](https://learning.postman.com/)

---

## Completion Criteria

### Project A (ToDo Classic)
- [ ] Full CRUD via forms
- [ ] Authorization works
- [ ] Code structured according to PSR-4

### Project B (ToDo API)
- [ ] All endpoints work
- [ ] Proper HTTP codes
- [ ] Postman tests pass
- [ ] API documentation exists

### Project C (Blog)
- [ ] API + Frontend work together
- [ ] Authentication implemented
- [ ] Pagination works
- [ ] Image upload works
