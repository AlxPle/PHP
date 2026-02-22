# Stage 2 — HTTP, Forms + Docker Environment

> **Status:** 🚧 Not Started

## Goal
Set up a Docker environment for development and learn to work with HTTP requests, forms, and data validation.

---

## Task Checklist

### Docker Environment
- [x] Install Docker and Docker Compose
- [x] Create `docker-compose.yml` for PHP + MySQL
- [x] Configure local file mounting
- [x] Run PHP in a container
- [x] Connect to MySQL from PHP
- [x] Set up phpMyAdmin (optional)

### HTTP and Superglobals
- [ ] Understand the difference between GET and POST
- [ ] Work with `$_GET` — URL parameters
- [ ] Work with `$_POST` — form data
- [ ] Work with `$_SERVER` — server information
- [ ] Work with `$_REQUEST` — combined data
- [ ] HTTP headers (`header()`)

### Validation and Sanitization
- [ ] Check required fields
- [ ] `filter_var()` for validation (email, URL, int)
- [ ] `filter_var()` for sanitization
- [ ] `htmlspecialchars()` for XSS protection
- [ ] Handle validation errors
- [ ] Display errors to user

### HTML Forms
- [ ] Create a form with different field types
- [ ] Attributes `action`, `method`, `enctype`
- [ ] Handle `<input>`, `<textarea>`, `<select>`
- [ ] Checkbox and radio buttons
- [ ] Preserve entered data on error

### Working with Files
- [ ] Write data to a text file
- [ ] Read data from a file
- [ ] Append data to a file (`FILE_APPEND`)
- [ ] Work with JSON files

---

## Mini Project: Feedback Form

### Requirements
- [ ] Form with fields: name, email, message
- [ ] Validation of all fields
- [ ] Save feedback to a file (JSON or TXT)
- [ ] Display list of feedback
- [ ] Thank you page after submission

---

## Docker Project Structure

```
Stage2_Forms/
├── README.md
├── docker-compose.yml
├── Dockerfile
├── .env.example
├── src/
│   ├── 01_get_post.php
│   ├── 02_superglobals.php
│   ├── 03_validation.php
│   ├── 04_sanitization.php
│   └── 05_file_handling.php
├── projects/
│   └── feedback/
│       ├── index.php
│       ├── process.php
│       ├── thank_you.php
│       ├── list.php
│       └── data/
│           └── feedbacks.json
└── notes/
    └── docker_commands.md
```

---

## Docker Compose пример

```yaml
version: '3.8'
services:
  php:
    build: .
    ports:
      - "8080:80"
    volumes:
      - ./src:/var/www/html
  
  mysql:
    image: mysql:8.0
    environment:
      MYSQL_ROOT_PASSWORD: root
      MYSQL_DATABASE: learning
    ports:
      - "3306:3306"
```

---

## Resources

- [Docker PHP Getting Started](https://docs.docker.com/language/php/)
- [Docker Compose PHP + MySQL](https://github.com/docker/awesome-compose/tree/master/nginx-php-mysql)
- [PHP Manual: Superglobals](https://www.php.net/manual/en/language.variables.superglobals.php)
- [PHP Manual: Filter Functions](https://www.php.net/manual/en/ref.filter.php)
- [PHP Manual: Filesystem](https://www.php.net/manual/en/ref.filesystem.php)

---

## Completion Criteria

- [ ] Docker environment is working
- [ ] Understand the difference between GET vs POST
- [ ] Can validate and sanitize input
- [ ] Feedback form works completely
- [ ] Data is saved to and read from file
