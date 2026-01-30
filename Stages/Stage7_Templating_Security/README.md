# Stage 7 — Templating, Security, Frameworks

> **Status:** 🚧 Not Started

## Цель этапа
Освоить шаблонизаторы, углубить знания безопасности и познакомиться с Laravel.

---

## Чеклист задач

### Templating Basics
- [ ] Разделение логики и представления
- [ ] PHP как шаблонизатор (альтернативный синтаксис)
- [ ] Создание layout системы
- [ ] Partials и includes
- [ ] Экранирование вывода

### Twig Template Engine
- [ ] Установка Twig через Composer
- [ ] Базовый синтаксис (`{{ }}`, `{% %}`)
- [ ] Наследование шаблонов (`extends`, `block`)
- [ ] Циклы и условия
- [ ] Фильтры и функции
- [ ] Автоэкранирование
- [ ] Кастомные фильтры

### Security

#### XSS Prevention
- [ ] Понимание XSS атак
- [ ] `htmlspecialchars()` везде
- [ ] Content Security Policy (CSP)
- [ ] Санитизация HTML (если нужен HTML)

#### CSRF Protection
- [ ] Понимание CSRF атак
- [ ] Генерация CSRF токенов
- [ ] Валидация токенов
- [ ] Double Submit Cookie pattern

#### SQL Injection
- [ ] Почему prepared statements обязательны
- [ ] Никогда не конкатенировать SQL
- [ ] Принцип наименьших привилегий для БД

#### Authentication Security
- [ ] `password_hash()` с PASSWORD_DEFAULT
- [ ] `password_verify()` для проверки
- [ ] Timing attacks и constant-time comparison
- [ ] Session fixation prevention
- [ ] Brute force protection (rate limiting)

#### Other Security
- [ ] HTTPS everywhere
- [ ] Secure cookies (`Secure`, `HttpOnly`, `SameSite`)
- [ ] Не показывать ошибки в production
- [ ] Валидация файловых загрузок
- [ ] Защита от path traversal

### Laravel Introduction

#### Установка и настройка
- [ ] Установка Laravel через Composer
- [ ] Структура Laravel проекта
- [ ] `.env` конфигурация
- [ ] Artisan CLI команды

#### Routing & Controllers
- [ ] Определение routes
- [ ] Route parameters
- [ ] Named routes
- [ ] Создание controllers
- [ ] Resource controllers

#### Blade Templates
- [ ] Синтаксис Blade (`{{ }}`, `@if`, `@foreach`)
- [ ] Layouts и секции
- [ ] Components
- [ ] Slots

#### Eloquent ORM
- [ ] Models и conventions
- [ ] Migrations
- [ ] Базовые CRUD операции
- [ ] Relationships (hasMany, belongsTo)
- [ ] Query Builder

#### Другое
- [ ] Middleware
- [ ] Form requests (validation)
- [ ] Authentication scaffolding
- [ ] **Rebuild Blog в Laravel** (опционально)

---

## Структура файлов

```
Stage7_Templating_Security/
├── README.md
├── src/
│   ├── templating/
│   │   ├── 01_php_templates.php
│   │   ├── 02_twig_basics.php
│   │   └── 03_twig_advanced.php
│   └── security/
│       ├── 01_xss_examples.php
│       ├── 02_csrf_protection.php
│       ├── 03_password_security.php
│       └── 04_input_validation.php
├── projects/
│   ├── twig-demo/
│   │   ├── composer.json
│   │   ├── public/
│   │   ├── src/
│   │   └── templates/
│   └── laravel-blog/
│       └── ... (Laravel project)
└── notes/
    ├── security_checklist.md
    ├── twig_cheatsheet.md
    └── laravel_commands.md
```

---

## Security Checklist

```markdown
## Before Deployment

### Input/Output
- [ ] All user input validated
- [ ] All output escaped
- [ ] File uploads validated (type, size, name)

### Authentication
- [ ] Passwords hashed with password_hash()
- [ ] Session regenerated on login
- [ ] CSRF tokens on all forms
- [ ] Rate limiting on login

### Database
- [ ] Only prepared statements used
- [ ] DB user has minimal permissions
- [ ] Sensitive data encrypted

### Configuration
- [ ] Debug mode OFF in production
- [ ] Error details hidden
- [ ] HTTPS enforced
- [ ] Secure cookie flags set

### Headers
- [ ] Content-Security-Policy
- [ ] X-Content-Type-Options: nosniff
- [ ] X-Frame-Options: DENY
- [ ] Strict-Transport-Security
```

---

## Twig Quick Reference

```twig
{# Comment #}

{{ variable }}
{{ variable|escape }}
{{ variable|default('N/A') }}

{% if condition %}
    ...
{% elseif other %}
    ...
{% else %}
    ...
{% endif %}

{% for item in items %}
    {{ item.name }}
{% else %}
    No items found
{% endfor %}

{% extends "layout.html.twig" %}

{% block content %}
    Page content here
{% endblock %}

{% include "partial.html.twig" %}
```

---

## Ресурсы

### Security
- [OWASP PHP Security Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/PHP_Security_Cheat_Sheet.html)
- [OWASP Top 10](https://owasp.org/www-project-top-ten/)
- [PHP Manual: Security](https://www.php.net/manual/en/security.php)

### Templating
- [Twig Documentation](https://twig.symfony.com/doc/)
- [PHP Alternative Syntax](https://www.php.net/manual/en/control-structures.alternative-syntax.php)

### Laravel
- [Laravel Documentation](https://laravel.com/docs)
- [Laracasts](https://laracasts.com/)
- [Laravel News](https://laravel-news.com/)

---

## Критерии завершения

- [ ] Могу использовать Twig для шаблонов
- [ ] Понимаю и предотвращаю XSS, CSRF, SQL Injection
- [ ] Security checklist пройден
- [ ] Создал проект на Laravel
- [ ] Понимаю Eloquent ORM basics
