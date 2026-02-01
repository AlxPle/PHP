# Stage 8 — Testing, CI/CD, Deployment

> **Status:** 🚧 Not Started

## Goal
Master testing with PHPUnit, set up CI/CD pipeline, and learn to deploy applications.

---

## Task Checklist

### PHPUnit Testing

#### Basics
- [ ] Install PHPUnit via Composer
- [ ] Configure `phpunit.xml`
- [ ] Write the first test
- [ ] Assertions (`assertEquals`, `assertTrue`, `assertNull`, etc.)
- [ ] Test naming conventions
- [ ] Run tests

#### Unit Tests
- [ ] Testing pure functions
- [ ] Testing classes
- [ ] Data providers
- [ ] Testing exceptions
- [ ] Code coverage reports

#### Integration Tests
- [ ] Testing with database
- [ ] Test fixtures
- [ ] Database transactions in tests
- [ ] Testing API endpoints

#### Mocking
- [ ] Test doubles concepts
- [ ] Mocking with PHPUnit
- [ ] Stubbing methods
- [ ] Mocking dependencies

#### TDD Basics
- [ ] Red-Green-Refactor cycle
- [ ] Writing tests first
- [ ] Test-driven development workflow

### Xdebug Debugging

- [ ] Install Xdebug
- [ ] Configure `php.ini` for Xdebug
- [ ] Integration with VS Code
- [ ] Breakpoints
- [ ] Step debugging (step over, step into, step out)
- [ ] Watching variables
- [ ] Call stack analysis
- [ ] Profiling with Xdebug

### CI/CD Pipeline

#### GitHub Actions
- [ ] Understanding CI/CD concept
- [ ] Create `.github/workflows/ci.yml`
- [ ] Run tests on push/PR
- [ ] Cache Composer dependencies
- [ ] Matrix testing (different PHP versions)

#### Quality Checks
- [ ] PHPStan in CI
- [ ] PHP CS Fixer in CI
- [ ] Code coverage in CI
- [ ] Failing builds on errors

#### Automated Deployment
- [ ] Deploy on merge to main
- [ ] Secrets management
- [ ] Environment variables in CI

### Deployment

#### Development Server
- [ ] PHP built-in server
- [ ] When to use (dev only!)

#### Production Setup
- [ ] nginx + php-fpm
- [ ] nginx configuration
- [ ] PHP-FPM pools
- [ ] Opcache configuration

#### Docker in Production
- [ ] Production Dockerfile
- [ ] Multi-stage builds
- [ ] Docker Compose for production
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

## File Structure

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

## Resources

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

## Completion Criteria

- [ ] Can write unit and integration tests
- [ ] PHPUnit coverage > 70%
- [ ] Xdebug is configured and working
- [ ] CI pipeline is configured and working
- [ ] Understand the deployment process
- [ ] Can deploy an application to VPS
