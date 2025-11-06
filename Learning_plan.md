# PHP Learning Plan (By Stages)

> **Tip:** Mark each task as completed by replacing 🚧 with ✅.

---

## Stage 1 — Language Basics 🚧
- Syntax overview 🚧
  - [ ] PHP tags (`<?php ... ?>`)
  - [ ] Comments (`//`, `/* ... */`)
  - [ ] Basic output (`echo`, `print`)
- Variables and data types 🚧
  - [ ] Declaring variables
  - [ ] Data types (string, int, float, bool, array)
  - [ ] Type juggling
- Operators 🚧
  - [ ] Arithmetic operators
  - [ ] Comparison operators
  - [ ] Logical operators
- Conditionals (if, switch) 🚧
  - [ ] if/else
  - [ ] elseif
  - [ ] switch/case
- Loops (for, while, foreach) 🚧
  - [ ] for loop
  - [ ] while loop
  - [ ] do-while loop
  - [ ] foreach loop
- Functions (definition, parameters, return) 🚧
  - [ ] Defining functions
  - [ ] Passing parameters
  - [ ] Returning values
- Mini-project: Calculator 🚧
- Mini-project: String processor 🚧

**Useful Resources:**
- [PHP Manual: Language Reference](https://www.php.net/manual/en/langref.php)
- [Traversy Media PHP Crash Course (YouTube)](https://youtu.be/BUCiSSyIGGU)
- [W3Schools PHP Tutorial](https://www.w3schools.com/php/)
- [PHP Basics (Codecademy)](https://www.codecademy.com/learn/learn-php)

---

## Stage 2 — HTTP and Forms 🚧
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
- [PHP Manual: Superglobals](https://www.php.net/manual/en/language.variables.superglobals.php)
- [PHP Manual: Forms](https://www.php.net/manual/en/tutorial.forms.php)
- [Traversy Media PHP Crash Course (YouTube)](https://youtu.be/BUCiSSyIGGU)
- [W3Schools: PHP Forms](https://www.w3schools.com/php/php_forms.asp)
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

## Stage 5 — Project Structure, Composer, OOP Basics 🚧
- PSR-4 autoloading 🚧
  - [ ] Understanding PSR standards
  - [ ] Setting up autoloading with Composer
- Organizing `src/`, `public/`, `templates/` 🚧
  - [ ] Separating code and public assets
  - [ ] Creating reusable templates
- Composer package management 🚧
  - [ ] Installing Composer
  - [ ] Adding/removing packages
  - [ ] Using Composer scripts
- Introduction to object-oriented programming 🚧
  - [ ] Defining classes and objects
  - [ ] Properties and methods
  - [ ] Constructors
  - [ ] Inheritance

**Useful Resources:**
- [Composer Official Site](https://getcomposer.org/)
- [PHP-FIG: PSR Standards](https://www.php-fig.org/psr/)
- [PHP Manual: Classes and Objects](https://www.php.net/manual/en/language.oop5.php)
- [W3Schools: PHP OOP](https://www.w3schools.com/php/php_oop_what_is.asp)

---

## Stage 6 — Simple Projects 🚧
- ToDo app (CRUD + database storage) 🚧
  - [ ] Project setup
  - [ ] Database schema design
  - [ ] CRUD operations (add, edit, delete, list tasks)
  - [ ] User interface
- Blog (create posts, list, view) 🚧
  - [ ] Project setup
  - [ ] Database schema design
  - [ ] Create post functionality
  - [ ] List and view posts
  - [ ] Edit/delete posts

**Useful Resources:**
- [Traversy Media: PHP Blog Project](https://www.youtube.com/watch?v=QxZxHUf7c_0)
- [PHP CRUD Tutorial (CodeShack)](https://codeshack.io/basic-php-mysql-crud/)
- [W3Schools: PHP CRUD](https://www.w3schools.com/php/php_mysql_crud.asp)

---

## Stage 7 — Templating, Security, Validation 🚧
- Templating basics 🚧
  - [ ] Separating logic and presentation
  - [ ] Using simple PHP templates
  - [ ] Exploring template engines (Twig, Blade) (optional)
- Security 🚧
  - [ ] Preventing XSS (escaping output)
  - [ ] Preventing CSRF (tokens, intro)
  - [ ] Input sanitization and validation
  - [ ] Using prepared statements for SQL
  - [ ] Error handling
  - [ ] Access control (basic user roles)

**Useful Resources:**
- [OWASP PHP Security Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/PHP_Security_Cheat_Sheet.html)
- [PHP Manual: Security](https://www.php.net/manual/en/security.php)
- [Twig Template Engine](https://twig.symfony.com/)
- [Laravel Blade Templates](https://laravel.com/docs/10.x/blade)

---

## Stage 8 — Testing and Local Deployment 🚧
- PHPUnit basics 🚧
  - [ ] Installing PHPUnit
  - [ ] Writing simple unit tests
  - [ ] Running tests
- Debugging (Xdebug) 🚧
  - [ ] Installing Xdebug
  - [ ] Using breakpoints and stack traces
- Running on built-in server / setup for nginx/php-fpm 🚧
  - [ ] Using PHP's built-in server
  - [ ] Basic nginx/php-fpm configuration
- Introduction to Docker for local development (optional) 🚧
  - [ ] Installing Docker
  - [ ] Setting up a PHP development container

**Useful Resources:**
- [PHPUnit Manual](https://phpunit.de/getting-started/phpunit-10.html)
- [Xdebug Documentation](https://xdebug.org/docs/)
- [PHP Built-in Web Server](https://www.php.net/manual/en/features.commandline.webserver.php)
- [Docker PHP Getting Started](https://docs.docker.com/language/php/)
- [DigitalOcean: How To Deploy a PHP Application](https://www.digitalocean.com/community/tutorials/how-to-deploy-a-php-application)

---

*You can adjust the pace and topics as needed during your learning journey.*
