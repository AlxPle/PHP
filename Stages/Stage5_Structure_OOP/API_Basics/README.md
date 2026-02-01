# Stage 5.5 — API Development Basics

> **Status:** 🚧 Not Started

## Goal
Master REST API development, understand HTTP protocol deeper, and learn to work with external APIs.

---

## Task Checklist

### HTTP Fundamentals
- [ ] HTTP methods (GET, POST, PUT, PATCH, DELETE)
- [ ] Idempotency (method idempotency)
- [ ] HTTP status codes by category:
  - [ ] 2xx Success (200, 201, 204)
  - [ ] 4xx Client Errors (400, 401, 403, 404, 422)
  - [ ] 5xx Server Errors (500, 502, 503)
- [ ] Headers (Content-Type, Accept, Authorization)
- [ ] Request body formats (JSON, form-data)

### REST API Concepts
- [ ] What is REST
- [ ] Resource-based URLs (`/users`, `/users/1`)
- [ ] Stateless architecture
- [ ] HATEOAS (understanding, implementation not required)
- [ ] API versioning (`/api/v1/`)
- [ ] Naming conventions

### Building REST API in PHP

#### Routing
- [ ] Simple router in PHP
- [ ] Parsing URL and method
- [ ] Route parameters (`/users/{id}`)
- [ ] 404 for non-existent routes

#### Handling Requests
- [ ] Reading JSON body (`php://input`)
- [ ] `json_decode()` with error handling
- [ ] Validating incoming data
- [ ] Working with query parameters

#### Sending Responses
- [ ] Setting Content-Type header
- [ ] `json_encode()` with proper flags
- [ ] Setting HTTP status code (`http_response_code()`)
- [ ] Consistent response format

#### Error Handling
- [ ] Error structure (code, message, details)
- [ ] Validation errors (422)
- [ ] Not found errors (404)
- [ ] Server errors (500)
- [ ] Don't expose internal details

### API Testing
- [ ] Install Postman or Insomnia
- [ ] Create request collections
- [ ] Environment variables in Postman
- [ ] Automated tests in Postman
- [ ] Using cURL from command line

### Consuming External APIs
- [ ] Using cURL in PHP
- [ ] Guzzle HTTP client (installation, usage)
- [ ] Processing responses
- [ ] Error handling
- [ ] Retry logic
- [ ] Rate limiting awareness

### API Authentication Basics
- [ ] API Keys
- [ ] Bearer tokens
- [ ] Basic authentication
- [ ] JWT (JSON Web Tokens) — theory
- [ ] OAuth 2.0 — concept overview

---

## File Structure

```
Stage5_Structure_OOP/API_Basics/
├── README.md
├── src/
│   ├── 01_http_methods.php
│   ├── 02_simple_router.php
│   ├── 03_json_handling.php
│   ├── 04_response_format.php
│   ├── 05_error_handling.php
│   ├── 06_curl_basics.php
│   └── 07_guzzle_client.php
├── projects/
│   └── simple-api/
│       ├── composer.json
│       ├── public/
│       │   └── index.php
│       ├── src/
│       │   ├── Router.php
│       │   ├── Controller/
│       │   ├── Response.php
│       │   └── Request.php
│       └── postman/
│           └── collection.json
└── notes/
    ├── http_status_codes.md
    ├── rest_best_practices.md
    └── postman_guide.md
```

---

## Simple Router Example

```php
<?php

declare(strict_types=1);

class Router
{
    private array $routes = [];

    public function get(string $path, callable $handler): void
    {
        $this->addRoute('GET', $path, $handler);
    }

    public function post(string $path, callable $handler): void
    {
        $this->addRoute('POST', $path, $handler);
    }

    public function put(string $path, callable $handler): void
    {
        $this->addRoute('PUT', $path, $handler);
    }

    public function delete(string $path, callable $handler): void
    {
        $this->addRoute('DELETE', $path, $handler);
    }

    private function addRoute(string $method, string $path, callable $handler): void
    {
        $this->routes[] = [
            'method' => $method,
            'path' => $path,
            'handler' => $handler,
        ];
    }

    public function dispatch(string $method, string $uri): void
    {
        foreach ($this->routes as $route) {
            if ($route['method'] !== $method) {
                continue;
            }

            $pattern = preg_replace('/\{(\w+)\}/', '(?P<$1>[^/]+)', $route['path']);
            $pattern = "#^{$pattern}$#";

            if (preg_match($pattern, $uri, $matches)) {
                $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
                call_user_func($route['handler'], $params);
                return;
            }
        }

        http_response_code(404);
        echo json_encode(['error' => 'Not Found']);
    }
}
```

---

## JSON Response Helper

```php
<?php

declare(strict_types=1);

function jsonResponse(mixed $data, int $statusCode = 200): never
{
    http_response_code($statusCode);
    header('Content-Type: application/json; charset=utf-8');
    
    echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    exit;
}

function successResponse(mixed $data, int $statusCode = 200): never
{
    jsonResponse([
        'success' => true,
        'data' => $data,
    ], $statusCode);
}

function errorResponse(string $message, int $statusCode = 400, ?array $details = null): never
{
    $response = [
        'success' => false,
        'error' => [
            'code' => $statusCode,
            'message' => $message,
        ],
    ];

    if ($details !== null) {
        $response['error']['details'] = $details;
    }

    jsonResponse($response, $statusCode);
}
```

---

## HTTP Status Codes Reference

| Code | Name | Usage |
|------|------|-------|
| 200 | OK | Successful GET, PUT, PATCH |
| 201 | Created | Successful POST (resource created) |
| 204 | No Content | Successful DELETE |
| 400 | Bad Request | Malformed request |
| 401 | Unauthorized | Missing/invalid authentication |
| 403 | Forbidden | Authenticated but no permission |
| 404 | Not Found | Resource doesn't exist |
| 422 | Unprocessable Entity | Validation errors |
| 500 | Internal Server Error | Server-side error |

---

## Guzzle Example

```php
<?php

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

$client = new Client([
    'base_uri' => 'https://api.example.com/',
    'timeout' => 5.0,
]);

try {
    $response = $client->get('users/1');
    $data = json_decode($response->getBody()->getContents(), true);
    
} catch (RequestException $e) {
    if ($e->hasResponse()) {
        $statusCode = $e->getResponse()->getStatusCode();
        $body = $e->getResponse()->getBody()->getContents();
    }
}
```

---

## Resources

- [REST API Tutorial](https://restfulapi.net/)
- [HTTP Status Codes](https://httpstatuses.com/)
- [MDN HTTP Guide](https://developer.mozilla.org/en-US/docs/Web/HTTP)
- [Guzzle Documentation](https://docs.guzzlephp.org/en/stable/)
- [JWT.io Introduction](https://jwt.io/introduction)
- [Postman Learning Center](https://learning.postman.com/)
- [cURL PHP Documentation](https://www.php.net/manual/en/book.curl.php)

---

## Completion Criteria

- [ ] Understand REST principles
- [ ] Can create a simple API in PHP
- [ ] Properly use HTTP status codes
- [ ] API is tested via Postman
- [ ] Can consume external APIs (Guzzle/cURL)
- [ ] Understand API authentication basics
