# Stage 7 — Templating, Security, Frameworks

> **Status:** 🚧 Not Started

## Goal
Master template engines, deepen security knowledge, and get familiar with Laravel.

---

## Task Checklist

### Templating Basics
- [ ] Separation of logic and presentation
- [ ] PHP as a template engine (alternative syntax)
- [ ] Creating a layout system
- [ ] Partials and includes
- [ ] Output escaping

### Twig Template Engine
- [ ] Install Twig via Composer
- [ ] Basic syntax (`{{ }}`, `{% %}`)
- [ ] Template inheritance (`extends`, `block`)
- [ ] Loops and conditions
- [ ] Filters and functions
- [ ] Auto-escaping
- [ ] Custom filters

### Security

#### XSS Prevention
- [ ] Understanding XSS attacks
- [ ] `htmlspecialchars()` everywhere
- [ ] Content Security Policy (CSP)
- [ ] HTML sanitization (if HTML is needed)

#### CSRF Protection
- [ ] Understanding CSRF attacks
- [ ] Generating CSRF tokens
- [ ] Token validation
- [ ] Double Submit Cookie pattern

#### SQL Injection
- [ ] Why prepared statements are mandatory
- [ ] Never concatenate SQL
- [ ] Principle of least privilege for DB

#### Authentication Security
- [ ] `password_hash()` with PASSWORD_DEFAULT
- [ ] `password_verify()` for verification
- [ ] Timing attacks and constant-time comparison
- [ ] Session fixation prevention
- [ ] Brute force protection (rate limiting)

#### Other Security
- [ ] HTTPS everywhere
- [ ] Secure cookies (`Secure`, `HttpOnly`, `SameSite`)
- [ ] Don't show errors in production
- [ ] File upload validation
- [ ] Path traversal protection

### Laravel Introduction

#### Installation and Setup
- [ ] Install Laravel via Composer
- [ ] Laravel project structure
- [ ] `.env` configuration
- [ ] Artisan CLI commands

#### Routing & Controllers
- [ ] Defining routes
- [ ] Route parameters
- [ ] Named routes
- [ ] Creating controllers
- [ ] Resource controllers

#### Blade Templates
- [ ] Blade syntax (`{{ }}`, `@if`, `@foreach`)
- [ ] Layouts and sections
- [ ] Components
- [ ] Slots

#### Eloquent ORM
- [ ] Models and conventions
- [ ] Migrations
- [ ] Basic CRUD operations
- [ ] Relationships (hasMany, belongsTo)
- [ ] Query Builder

#### Other
- [ ] Middleware
- [ ] Form requests (validation)
- [ ] Authentication scaffolding
- [ ] **Rebuild Blog in Laravel** (optional)

---

## File Structure

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

## Resources

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

## Completion Criteria

- [ ] Can use Twig for templates
- [ ] Understand and prevent XSS, CSRF, SQL Injection
- [ ] Security checklist passed
- [ ] Created a Laravel project
- [ ] Understand Eloquent ORM basics
