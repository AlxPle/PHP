# Stage 8 — Testing, CI/CD, Deployment

> **Status:** 🚧 Not Started

## Цель этапа
Освоить тестирование с PHPUnit, настроить CI/CD pipeline и научиться деплоить приложения.

---

## Чеклист задач

### PHPUnit Testing

#### Основы
- [ ] Установка PHPUnit через Composer
- [ ] Настройка `phpunit.xml`
- [ ] Написание первого теста
- [ ] Assertions (`assertEquals`, `assertTrue`, `assertNull`, etc.)
- [ ] Test naming conventions
- [ ] Запуск тестов

#### Unit Tests
- [ ] Тестирование чистых функций
- [ ] Тестирование классов
- [ ] Data providers
- [ ] Testing exceptions
- [ ] Code coverage reports

#### Integration Tests
- [ ] Тестирование с базой данных
- [ ] Test fixtures
- [ ] Database transactions в тестах
- [ ] Тестирование API endpoints

#### Mocking
- [ ] Test doubles concepts
- [ ] Mocking с PHPUnit
- [ ] Stubbing методов
- [ ] Mocking dependencies

#### TDD Basics
- [ ] Red-Green-Refactor cycle
- [ ] Writing tests first
- [ ] Test-driven development workflow

### Xdebug Debugging

- [ ] Установка Xdebug
- [ ] Настройка `php.ini` для Xdebug
- [ ] Интеграция с VS Code
- [ ] Breakpoints
- [ ] Step debugging (step over, step into, step out)
- [ ] Watching variables
- [ ] Call stack analysis
- [ ] Profiling с Xdebug

### CI/CD Pipeline

#### GitHub Actions
- [ ] Понимание CI/CD концепции
- [ ] Создание `.github/workflows/ci.yml`
- [ ] Запуск тестов при push/PR
- [ ] Кэширование Composer dependencies
- [ ] Matrix testing (разные PHP версии)

#### Quality Checks
- [ ] PHPStan в CI
- [ ] PHP CS Fixer в CI
- [ ] Code coverage в CI
- [ ] Failing builds при ошибках

#### Automated Deployment
- [ ] Deploy при merge в main
- [ ] Secrets management
- [ ] Environment variables в CI

### Deployment

#### Development Server
- [ ] PHP built-in server
- [ ] Когда использовать (только dev!)

#### Production Setup
- [ ] nginx + php-fpm
- [ ] Конфигурация nginx
- [ ] PHP-FPM pools
- [ ] Opcache настройка

#### Docker in Production
- [ ] Production Dockerfile
- [ ] Multi-stage builds
- [ ] Docker Compose для production
- [ ] Health checks

#### Server Security
- [ ] Firewall basics (ufw)
- [ ] SSH key authentication
- [ ] Fail2ban
- [ ] Regular updates

#### Deployment Tools
- [ ] Deployer (PHP deployment tool)
- [ ] Zero-downtime deployments
- [ ] Rollback strategies

---

## Структура файлов

```
Stage8_Testing_Deployment/
├── README.md
├── src/
│   ├── testing/
│   │   ├── 01_first_test.php
│   │   ├── 02_assertions.php
│   │   ├── 03_data_providers.php
│   │   ├── 04_mocking.php
│   │   └── 05_integration_tests.php
│   └── deployment/
│       ├── Dockerfile
│       ├── docker-compose.prod.yml
│       └── nginx.conf
├── projects/
│   └── tested-app/
│       ├── composer.json
│       ├── phpunit.xml
│       ├── .github/
│       │   └── workflows/
│       │       └── ci.yml
│       ├── src/
│       └── tests/
│           ├── Unit/
│           └── Integration/
└── notes/
    ├── phpunit_cheatsheet.md
    ├── xdebug_setup.md
    └── deployment_checklist.md
```

---

## PHPUnit Example

```php
<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    private Calculator $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testAddition(): void
    {
        $result = $this->calculator->add(2, 3);
        $this->assertEquals(5, $result);
    }

    public function testDivisionByZeroThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->calculator->divide(10, 0);
    }

    /**
     * @dataProvider additionProvider
     */
    public function testAddWithDataProvider(int $a, int $b, int $expected): void
    {
        $this->assertEquals($expected, $this->calculator->add($a, $b));
    }

    public static function additionProvider(): array
    {
        return [
            [0, 0, 0],
            [1, 1, 2],
            [-1, 1, 0],
            [100, 200, 300],
        ];
    }
}
```

---

## GitHub Actions CI

```yaml
# .github/workflows/ci.yml
name: CI

on:
  push:
    branches: [main]
  pull_request:
    branches: [main]

jobs:
  test:
    runs-on: ubuntu-latest
    
    strategy:
      matrix:
        php-version: ['8.1', '8.2', '8.3']
    
    steps:
      - uses: actions/checkout@v4
      
      - name: Setup PHP
        uses: shivammathur/setup-php@v2
        with:
          php-version: ${{ matrix.php-version }}
          extensions: mbstring, pdo_mysql
          coverage: xdebug
      
      - name: Cache Composer dependencies
        uses: actions/cache@v3
        with:
          path: vendor
          key: ${{ runner.os }}-composer-${{ hashFiles('**/composer.lock') }}
      
      - name: Install dependencies
        run: composer install --prefer-dist --no-progress
      
      - name: Run PHPStan
        run: vendor/bin/phpstan analyse src --level=5
      
      - name: Run tests
        run: vendor/bin/phpunit --coverage-text
```

---

## Xdebug VS Code Configuration

```json
// .vscode/launch.json
{
    "version": "0.2.0",
    "configurations": [
        {
            "name": "Listen for Xdebug",
            "type": "php",
            "request": "launch",
            "port": 9003
        }
    ]
}
```

```ini
; php.ini
[xdebug]
xdebug.mode=debug
xdebug.start_with_request=yes
xdebug.client_port=9003
xdebug.client_host=localhost
```

---

## Deployment Checklist

```markdown
## Pre-Deployment
- [ ] All tests pass
- [ ] PHPStan clean
- [ ] Dependencies updated
- [ ] Environment variables set
- [ ] Database migrations ready

## Deployment
- [ ] Backup database
- [ ] Enable maintenance mode
- [ ] Pull latest code
- [ ] Run composer install --no-dev
- [ ] Run migrations
- [ ] Clear caches
- [ ] Disable maintenance mode

## Post-Deployment
- [ ] Smoke test critical paths
- [ ] Monitor error logs
- [ ] Check performance
- [ ] Verify backups
```

---

## Ресурсы

### Testing
- [PHPUnit Documentation](https://phpunit.de/documentation.html)
- [Test-Driven Development](https://www.amazon.com/Test-Driven-Development-Kent-Beck/dp/0321146530)
- [Mockery Documentation](http://docs.mockery.io/)

### Debugging
- [Xdebug Documentation](https://xdebug.org/docs/)
- [VS Code PHP Debug](https://marketplace.visualstudio.com/items?itemName=xdebug.php-debug)

### CI/CD
- [GitHub Actions for PHP](https://github.com/shivammathur/setup-php)
- [GitHub Actions Documentation](https://docs.github.com/en/actions)

### Deployment
- [Deployer](https://deployer.org/)
- [Docker PHP Best Practices](https://docs.docker.com/language/php/)
- [DigitalOcean PHP Deployment](https://www.digitalocean.com/community/tutorials/how-to-deploy-a-php-application)

---

## Критерии завершения

- [ ] Могу писать unit и integration тесты
- [ ] PHPUnit coverage > 70%
- [ ] Xdebug настроен и работает
- [ ] CI pipeline настроен и работает
- [ ] Понимаю процесс деплоя
- [ ] Могу задеплоить приложение на VPS
