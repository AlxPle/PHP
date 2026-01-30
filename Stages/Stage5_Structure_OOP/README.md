# Stage 5 — Project Structure, Composer, OOP + SOLID

> **Status:** 🚧 Not Started

## Цель этапа
Научиться правильно структурировать проекты, использовать Composer, освоить ООП и принципы SOLID.

---

## Чеклист задач

### PSR Standards
- [ ] PSR-1: Basic Coding Standard
- [ ] PSR-4: Autoloading Standard
- [ ] PSR-12: Extended Coding Style
- [ ] Понимание namespaces

### Структура проекта
- [ ] Разделение `public/` (точка входа) и `src/` (код)
- [ ] Папка `templates/` для представлений
- [ ] Папка `config/` для конфигурации
- [ ] `.env` файлы и `vlucas/phpdotenv`
- [ ] `.gitignore` правильная настройка

### Composer
- [ ] Установка Composer глобально
- [ ] Инициализация проекта (`composer init`)
- [ ] Понимание `composer.json`
- [ ] Установка пакетов (`composer require`)
- [ ] Dev-зависимости (`composer require --dev`)
- [ ] Autoloading PSR-4
- [ ] Composer scripts
- [ ] `composer.lock` и версионирование

### ООП Basics
- [ ] Классы и объекты
- [ ] Свойства и методы
- [ ] Конструкторы
- [ ] Constructor property promotion (PHP 8)
- [ ] Visibility: public, protected, private
- [ ] Static свойства и методы
- [ ] Constants в классах

### ООП Advanced
- [ ] Наследование (extends)
- [ ] Абстрактные классы
- [ ] Интерфейсы (implements)
- [ ] Traits
- [ ] Final классы и методы
- [ ] Type hints для классов

### SOLID Principles
- [ ] **S** — Single Responsibility Principle
- [ ] **O** — Open/Closed Principle
- [ ] **L** — Liskov Substitution Principle
- [ ] **I** — Interface Segregation Principle
- [ ] **D** — Dependency Inversion Principle

### Dependency Injection
- [ ] Понимание DI концепции
- [ ] Constructor injection
- [ ] Setter injection
- [ ] Interface-based injection
- [ ] Простой DI container

### Static Analysis
- [ ] Установка PHPStan
- [ ] Настройка `phpstan.neon`
- [ ] Запуск анализа и исправление ошибок
- [ ] PHP CS Fixer для code style
- [ ] Интеграция в workflow

---

## Структура проекта (пример)

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

## Пример composer.json

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

## Структура файлов этапа

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

## Ресурсы

- [Composer Documentation](https://getcomposer.org/doc/)
- [PHP-FIG PSR Standards](https://www.php-fig.org/psr/)
- [PHP Manual: OOP](https://www.php.net/manual/en/language.oop5.php)
- [SOLID Principles](https://www.digitalocean.com/community/conceptual-articles/s-o-l-i-d-the-first-five-principles-of-object-oriented-design)
- [PHPStan Documentation](https://phpstan.org/)
- [PHP CS Fixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer)

---

## Критерии завершения

- [ ] Понимаю и использую PSR-4 autoloading
- [ ] Могу настроить Composer проект с нуля
- [ ] Понимаю все принципы SOLID
- [ ] Использую DI в своём коде
- [ ] PHPStan не показывает ошибок на level 5+
