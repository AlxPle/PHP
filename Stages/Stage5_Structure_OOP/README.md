# Stage 5 — Project Structure, Composer, OOP + SOLID

> **Status:** 🚧 Not Started

## Goal
Learn to properly structure projects, use Composer, master OOP and SOLID principles.

---

## Task Checklist

### PSR Standards
- [ ] PSR-1: Basic Coding Standard
- [ ] PSR-4: Autoloading Standard
- [ ] PSR-12: Extended Coding Style
- [ ] Understanding namespaces
- [ ] PSR naming: classes in `PascalCase`, methods in `camelCase`
- [ ] One class per file rule
- [ ] Proper file structure (namespace matches directory)

### Project Structure
- [ ] Separate `public/` (entry point) and `src/` (code)
- [ ] `templates/` folder for views
- [ ] `config/` folder for configuration
- [ ] `.env` files and `vlucas/phpdotenv`
- [ ] `.gitignore` proper setup

### Composer
- [ ] Install Composer globally
- [ ] Initialize project (`composer init`)
- [ ] Understand `composer.json`
- [ ] Install packages (`composer require`)
- [ ] Dev dependencies (`composer require --dev`)
- [ ] Autoloading PSR-4
- [ ] Composer scripts
- [ ] `composer.lock` and versioning

### OOP Basics
- [ ] Classes and objects
- [ ] Properties and methods
- [ ] Constructors
- [ ] Constructor property promotion (PHP 8)
- [ ] Visibility: public, protected, private
- [ ] Static properties and methods
- [ ] Constants in classes

### OOP Advanced
- [ ] Inheritance (extends)
- [ ] Abstract classes
- [ ] Interfaces (implements)
- [ ] Traits
- [ ] Final classes and methods
- [ ] Type hints for classes

### SOLID Principles
- [ ] **S** — Single Responsibility Principle
- [ ] **O** — Open/Closed Principle
- [ ] **L** — Liskov Substitution Principle
- [ ] **I** — Interface Segregation Principle
- [ ] **D** — Dependency Inversion Principle

### Dependency Injection
- [ ] Understanding DI concept
- [ ] Constructor injection
- [ ] Setter injection
- [ ] Interface-based injection
- [ ] Simple DI container

### Error Handling in OOP
- [ ] Custom exception hierarchy for the project
- [ ] Domain-specific exceptions
- [ ] Never catch bare `\Exception` (catch specific types)
- [ ] Using `finally` for resource cleanup

### Static Analysis
- [ ] Install PHPStan
- [ ] Configure `phpstan.neon`
- [ ] Run analysis and fix errors
- [ ] PHP CS Fixer for code style
- [ ] Integration into workflow

---

## Project Structure (example)

```
my-project/
├── composer.json
├── composer.lock
├── .env
├── .env.example
├── .gitignore
├── phpstan.neon
├── .php-cs-fixer.php
├── public/
│   └── index.php          # Единая точка входа
├── src/
│   ├── Controller/
│   ├── Model/
│   ├── Service/
│   ├── Repository/
│   └── Entity/
├── templates/
│   ├── layout.php
│   └── pages/
├── config/
│   └── database.php
├── tests/
│   └── ...
└── vendor/                 # Composer dependencies
```

---

## composer.json Example

```json
{
    "name": "myname/my-project",
    "description": "Learning project",
    "type": "project",
    "require": {
        "php": "^8.1",
        "vlucas/phpdotenv": "^5.5"
    },
    "require-dev": {
        "phpstan/phpstan": "^1.10",
        "friendsofphp/php-cs-fixer": "^3.0"
    },
    "autoload": {
        "psr-4": {
            "App\\": "src/"
        }
    },
    "scripts": {
        "analyse": "phpstan analyse src",
        "cs-fix": "php-cs-fixer fix src"
    }
}
```

---

## Stage File Structure

```
Stage5_Structure_OOP/
├── README.md
├── src/
│   ├── 01_namespaces.php
│   ├── 02_classes_basics.php
│   ├── 03_inheritance.php
│   ├── 04_interfaces.php
│   ├── 05_traits.php
│   ├── 06_solid_examples/
│   │   ├── srp.php
│   │   ├── ocp.php
│   │   ├── lsp.php
│   │   ├── isp.php
│   │   └── dip.php
│   └── 07_dependency_injection.php
├── projects/
│   └── structured-app/
│       ├── composer.json
│       ├── public/
│       ├── src/
│       ├── config/
│       └── templates/
└── notes/
    ├── solid_explained.md
    └── composer_cheatsheet.md
```

---

## Resources

- [Composer Documentation](https://getcomposer.org/doc/)
- [PHP-FIG PSR Standards](https://www.php-fig.org/psr/)
- [PHP Manual: OOP](https://www.php.net/manual/en/language.oop5.php)
- [SOLID Principles](https://www.digitalocean.com/community/conceptual-articles/s-o-l-i-d-the-first-five-principles-of-object-oriented-design)
- [PHPStan Documentation](https://phpstan.org/)
- [PHP CS Fixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer)

---

## Completion Criteria

- [ ] Understand and use PSR-4 autoloading
- [ ] Can set up a Composer project from scratch
- [ ] Understand all SOLID principles
- [ ] Use DI in my code
- [ ] PHPStan shows no errors at level 5+
