# PHP Learning Plan (By Stages)

> **Tip:** Mark each task as completed by replacing 🚧 with ✅.
> 
> **Updated:** January 2026 — modernized for PHP 8.x, added API development, CI/CD

---

## Stage 1 — Language Basics🚧
- Syntax overview 🚧
  - [ ] PHP tags (`<?php ... ?>`)
  - [ ] Comments (`//`, `/* ... */`)
  - [ ] Basic output (`echo`, `print`)
  - [ ] **Strict types (`declare(strict_types=1)`)**
- Variables and data types 🚧
  - [ ] Declaring variables
  - [ ] Data types (string, int, float, bool, array)
  - [ ] Type juggling
  - [ ] **Type declarations (parameter types, return types)**
  - [ ] **Union types (`int|string`)**
  - [ ] **Nullable types (`?string`)**
- Operators 🚧
  - [ ] Arithmetic operators
  - [ ] Comparison operators
  - [ ] Logical operators
  - [ ] **Null coalescing (`??`, `??=`)**
  - [ ] **Spaceship operator (`<=>`)**
- Conditionals (if, switch, match) 🚧
  - [ ] if/else
  - [ ] elseif
  - [ ] switch/case
  - [ ] **Match expression (PHP 8.0+)**
- Loops (for, while, foreach) 🚧
  - [ ] for loop
  - [ ] while loop
  - [ ] do-while loop
  - [ ] foreach loop
- Functions (definition, parameters, return) 🚧
  - [ ] Defining functions
  - [ ] Passing parameters
  - [ ] Returning values
  - [ ] **Named arguments (PHP 8.0+)**
  - [ ] **Arrow functions (`fn() =>`)**
- **PHP 8.x Features** 🚧
  - [ ] Enums (PHP 8.1+)
  - [ ] Constructor property promotion
  - [ ] Attributes (basics)
  - [ ] `readonly` properties (PHP 8.1+)
- Mini-project: Calculator 🚧
- Mini-project: String processor 🚧

**Useful Resources:**
- [PHP Manual: Language Reference](https://www.php.net/manual/en/langref.php)
- [Traversy Media PHP Crash Course (YouTube)](https://youtu.be/BUCiSSyIGGU)
- [PHP 8.0 New Features](https://www.php.net/releases/8.0/en.php)
- [PHP 8.1 New Features](https://www.php.net/releases/8.1/en.php)
- [PHP 8.2 New Features](https://www.php.net/releases/8.2/en.php)
- [PHP 8.3 New Features](https://www.php.net/releases/8.3/en.php)
- [SymfonyCasts PHP Tutorials](https://symfonycasts.com/tracks/php)

---

## Stage 2 — HTTP, Forms + Docker Environment 🚧
- **Docker development environment** 🚧
  - [ ] Installing Docker and Docker Compose
  - [ ] Setting up PHP + MySQL containers
  - [ ] Understanding `docker-compose.yml`
  - [ ] Mounting local files into containers
  - [ ] Running PHP in Docker
- GET/POST, superglobals (`$_GET`, `$_POST`, `$_SERVER`) 🚧
  - [ ] Understanding HTTP request methods
  - [ ] Accessing query parameters with `$_GET`
  - [ ] Accessing form data with `$_POST`
  - [ ] Using `$_SERVER` for server/environment info
- Input validation and sanitization 🚧
  - [ ] Basic validation (required fields, types)
  - [ ] Sanitizing input (`filter_var`, `htmlspecialchars`)
  - [ ] Handling invalid input
- Simple feedback form 🚧
  - [ ] Creating an HTML form
  - [ ] Processing form submission in PHP
  - [ ] Displaying feedback to the user
- Saving data to a file 🚧
  - [ ] Writing user input to a text file
  - [ ] Reading and displaying saved feedback

**Useful Resources:**
- [Docker PHP Getting Started](https://docs.docker.com/language/php/)
- [Docker Compose PHP + MySQL Example](https://github.com/docker/awesome-compose/tree/master/nginx-php-mysql)
- [PHP Manual: Superglobals](https://www.php.net/manual/en/language.variables.superglobals.php)
- [PHP Manual: Forms](https://www.php.net/manual/en/tutorial.forms.php)
- [PHP Input Filtering](https://www.php.net/manual/en/filter.examples.php)

---

## Stage 3 — Sessions, Cookies, Authentication 🚧
- `session_start()`, state management 🚧
  - [ ] Starting a session
  - [ ] Storing/retrieving session variables
  - [ ] Destroying a session
- Simple registration/login (in-memory or file-based) 🚧
  - [ ] Creating a registration form
  - [ ] Saving user credentials (file or array)
  - [ ] Login form and authentication logic
  - [ ] Session-based login state
- Working with cookies 🚧
  - [ ] Setting cookies
  - [ ] Reading cookies
  - [ ] Deleting cookies

**Useful Resources:**
- [PHP Manual: Sessions](https://www.php.net/manual/en/book.session.php)
- [PHP Manual: Cookies](https://www.php.net/manual/en/features.cookies.php)
- [W3Schools: PHP Sessions](https://www.w3schools.com/php/php_sessions.asp)
- [W3Schools: PHP Cookies](https://www.w3schools.com/php/php_cookies.asp)

---

## Stage 4 — Working with Databases 🚧
- PDO, prepared statements 🚧
  - [ ] Installing and configuring MariaDB/MySQL
  - [ ] Connecting to a database with PDO
  - [ ] Using prepared statements
  - [ ] Handling database errors
- Basic CRUD (create/read/update/delete) 🚧
  - [ ] Creating records
  - [ ] Reading records
  - [ ] Updating records
  - [ ] Deleting records

**Useful Resources:**
- [PHP Manual: PDO](https://www.php.net/manual/en/book.pdo.php)
- [PHP Manual: MySQLi](https://www.php.net/manual/en/book.mysqli.php)
- [W3Schools: PHP MySQL Database](https://www.w3schools.com/php/php_mysql_intro.asp)
- [DigitalOcean: How To Use PDO](https://www.digitalocean.com/community/tutorials/how-to-connect-to-mysql-with-php-using-pdo)

---

## Stage 5 — Project Structure, Composer, OOP + SOLID 🚧
- PSR-4 autoloading 🚧
  - [ ] Understanding PSR standards (PSR-1, PSR-4, PSR-12)
  - [ ] Setting up autoloading with Composer
- Organizing `src/`, `public/`, `templates/` 🚧
  - [ ] Separating code and public assets
  - [ ] Creating reusable templates
  - [ ] Environment variables (`.env`, `vlucas/phpdotenv`)
- Composer package management 🚧
  - [ ] Installing Composer
  - [ ] Adding/removing packages
  - [ ] Using Composer scripts
  - [ ] Understanding `composer.json` and `composer.lock`
- Object-oriented programming 🚧
  - [ ] Defining classes and objects
  - [ ] Properties and methods
  - [ ] Constructors (+ constructor property promotion)
  - [ ] Inheritance
  - [ ] Interfaces and abstract classes
  - [ ] Traits
  - [ ] Visibility (public, protected, private)
- **SOLID Principles** 🚧
  - [ ] Single Responsibility Principle
  - [ ] Open/Closed Principle
  - [ ] Liskov Substitution Principle
  - [ ] Interface Segregation Principle
  - [ ] Dependency Inversion Principle
- **Dependency Injection** 🚧
  - [ ] Understanding DI concept
  - [ ] Constructor injection
  - [ ] Simple DI container basics
- **Static Analysis Tools** 🚧
  - [ ] Installing PHPStan or Psalm
  - [ ] Running static analysis
  - [ ] Fixing type errors
  - [ ] PHP CS Fixer for code style

**Useful Resources:**
- [Composer Official Site](https://getcomposer.org/)
- [PHP-FIG: PSR Standards](https://www.php-fig.org/psr/)
- [PHP Manual: Classes and Objects](https://www.php.net/manual/en/language.oop5.php)
- [SOLID Principles Explained](https://www.digitalocean.com/community/conceptual-articles/s-o-l-i-d-the-first-five-principles-of-object-oriented-design)
- [PHPStan Documentation](https://phpstan.org/user-guide/getting-started)
- [Psalm Documentation](https://psalm.dev/docs/)
- [PHP CS Fixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer)

---

## Stage 5.5 — API Development Basics 🚧
- **HTTP and REST fundamentals** 🚧
  - [ ] HTTP methods (GET, POST, PUT, PATCH, DELETE)
  - [ ] HTTP status codes (200, 201, 204, 400, 401, 404, 422, 500)
  - [ ] Request/response headers
  - [ ] Content-Type (application/json)
- **Building a REST API** 🚧
  - [ ] Simple router implementation
  - [ ] Handling JSON input (`json_decode`, `php://input`)
  - [ ] Returning JSON responses (`json_encode`, headers)
  - [ ] Error handling and consistent response format
- **API Testing** 🚧
  - [ ] Using Postman or Insomnia
  - [ ] Testing CRUD endpoints
  - [ ] Debugging API responses
- **Consuming External APIs** 🚧
  - [ ] Using cURL
  - [ ] Using Guzzle HTTP client
  - [ ] Handling API responses and errors
- **API Authentication (basics)** 🚧
  - [ ] API keys concept
  - [ ] Bearer tokens
  - [ ] JWT introduction (understanding, not implementation)

**Useful Resources:**
- [REST API Tutorial](https://restfulapi.net/)
- [HTTP Status Codes](https://httpstatuses.com/)
- [Guzzle HTTP Client](https://docs.guzzlephp.org/en/stable/)
- [JWT.io Introduction](https://jwt.io/introduction)
- [Postman Learning Center](https://learning.postman.com/)

---

## Stage 6 — Projects (ToDo → ToDo API → Blog) 🚧

### Project A: ToDo App (Classic Web) 🚧
- [ ] Project setup with proper structure
- [ ] Database schema design (tasks table)
- [ ] CRUD operations via HTML forms
- [ ] User authentication (session-based)
- [ ] Input validation and sanitization
- [ ] Simple MVC-like organization

### Project B: ToDo API (REST) 🚧
- [ ] Convert ToDo app to REST API
- [ ] JSON endpoints for all CRUD operations
- [ ] Proper HTTP methods and status codes
- [ ] API error handling
- [ ] Test with Postman/Insomnia
- [ ] API documentation (simple README)

### Project C: Blog with API Backend 🚧
- [ ] Database schema (posts, users, categories)
- [ ] REST API for posts CRUD
- [ ] Frontend consuming own API (fetch/axios)
- [ ] User authentication (JWT or sessions)
- [ ] Pagination and filtering
- [ ] Image upload handling
- [ ] Comments system (optional)

**Useful Resources:**
- [Traversy Media: PHP Blog Project](https://www.youtube.com/watch?v=QxZxHUf7c_0)
- [PHP CRUD Tutorial (CodeShack)](https://codeshack.io/basic-php-mysql-crud/)
- [Building REST API in PHP](https://www.codeofaninja.com/2017/02/create-simple-rest-api-in-php.html)

---

## Stage 7 — Templating, Security, Frameworks 🚧
- Templating basics 🚧
  - [ ] Separating logic and presentation
  - [ ] Using simple PHP templates
  - [ ] Twig template engine
  - [ ] Blade templates (Laravel)
- Security 🚧
  - [ ] Preventing XSS (escaping output)
  - [ ] Preventing CSRF (tokens)
  - [ ] SQL injection prevention (prepared statements)
  - [ ] Password hashing (`password_hash`, `password_verify`)
  - [ ] Input validation libraries
  - [ ] Rate limiting basics
  - [ ] HTTPS and secure cookies
  - [ ] Error handling (don't expose internals)
  - [ ] Access control (roles and permissions)
- **Framework Introduction (Laravel)** 🚧
  - [ ] Installing Laravel
  - [ ] Understanding MVC in Laravel
  - [ ] Routing and controllers
  - [ ] Eloquent ORM basics
  - [ ] Blade templates
  - [ ] Artisan CLI
  - [ ] Rebuild Blog project in Laravel (optional)

**Useful Resources:**
- [OWASP PHP Security Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/PHP_Security_Cheat_Sheet.html)
- [PHP Manual: Security](https://www.php.net/manual/en/security.php)
- [Twig Template Engine](https://twig.symfony.com/)
- [Laravel Documentation](https://laravel.com/docs)
- [Laracasts (Laravel Video Tutorials)](https://laracasts.com/)

---

## Stage 8 — Testing, CI/CD, Deployment 🚧
- PHPUnit testing 🚧
  - [ ] Installing PHPUnit
  - [ ] Writing unit tests
  - [ ] Writing integration tests
  - [ ] Test-driven development (TDD) basics
  - [ ] Code coverage reports
  - [ ] Mocking dependencies
- Debugging (Xdebug) 🚧
  - [ ] Installing Xdebug
  - [ ] Configuring Xdebug with VS Code
  - [ ] Using breakpoints and step debugging
  - [ ] Profiling with Xdebug
- **CI/CD Pipeline** 🚧
  - [ ] GitHub Actions basics
  - [ ] Running tests automatically on push
  - [ ] Running PHPStan in CI
  - [ ] Code style checks in CI
  - [ ] Automated deployment (basics)
- Deployment 🚧
  - [ ] PHP's built-in server (development)
  - [ ] nginx + php-fpm configuration
  - [ ] Docker in production
  - [ ] Environment configuration
  - [ ] Basic server security
  - [ ] Deploying to VPS or cloud (DigitalOcean, etc.)

**Useful Resources:**
- [PHPUnit Manual](https://phpunit.de/documentation.html)
- [Xdebug Documentation](https://xdebug.org/docs/)
- [GitHub Actions for PHP](https://github.com/shivammathur/setup-php)
- [PHP Built-in Web Server](https://www.php.net/manual/en/features.commandline.webserver.php)
- [Docker PHP Getting Started](https://docs.docker.com/language/php/)
- [DigitalOcean: How To Deploy a PHP Application](https://www.digitalocean.com/community/tutorials/how-to-deploy-a-php-application)
- [Deployer - PHP Deployment Tool](https://deployer.org/)

---

## Summary of Stages

| Stage | Topic | Key Skills |
|-------|-------|------------|
| 1 | Basics + PHP 8.x | Syntax, types, enums, match, strict typing |
| 2 | Forms + Docker | Environment setup, HTTP, validation |
| 3 | Sessions/Auth | State management, cookies, login |
| 4 | Databases | PDO, prepared statements, CRUD |
| 5 | OOP/Composer | SOLID, DI, PSR, static analysis |
| 5.5 | API Development | REST, JSON, HTTP methods, Postman |
| 6 | Projects | ToDo → ToDo API → Blog |
| 7 | Security/Frameworks | XSS, CSRF, Laravel basics |
| 8 | Testing/Deploy | PHPUnit, CI/CD, deployment |

---

*You can adjust the pace and topics as needed during your learning journey.*
*Plan updated: January 2026*
