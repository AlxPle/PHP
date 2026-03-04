# Stage 3 — Sessions, Cookies, Authentication

> **Status:** 🚧 Not Started

## Goal
Learn to manage user state through sessions and cookies, create a simple authentication system.

---

## Task Checklist

### Sessions
- [x] Understand the stateless HTTP concept
- [x] `session_start()` — start a session
- [x] `$_SESSION` — store data
- [x] `session_destroy()` — destroy a session
- [x] `session_regenerate_id()` — security
- [x] Session ID and cookies
- [x] Session settings (`php.ini`, `session_set_cookie_params`)

### Cookies
- [ ] `setcookie()` — set a cookie
- [ ] `$_COOKIE` — read cookies
- [ ] Cookie lifetime
- [ ] Delete cookies
- [ ] Secure and HttpOnly flags
- [ ] SameSite attribute

### Authentication (file-based)
- [ ] Registration form
- [ ] Password hashing (`password_hash`)
- [ ] Save users to file/JSON
- [ ] Login form
- [ ] Password verification (`password_verify`)
- [ ] Save state in session
- [ ] Logout functionality

### Page Protection
- [ ] Check authorization
- [ ] Redirect unauthorized users
- [ ] Middleware-like logic
- [ ] Flash messages (notifications)

---

## Mini Project: User Auth System

### Features
- [ ] Registration with validation
- [ ] Login to the system
- [ ] Protected page (dashboard)
- [ ] Logout from the system
- [ ] "Remember me" via cookies
- [ ] Flash messages for errors/success

### Pages
- `register.php` — регистрация
- `login.php` — вход
- `dashboard.php` — личный кабинет (защищён)
- `logout.php` — выход
- `profile.php` — профиль пользователя

---

## File Structure

```
Stage3_Sessions/
├── README.md
├── src/
│   ├── 01_sessions.php
│   ├── 02_cookies.php
│   ├── 03_password_hashing.php
│   └── 04_flash_messages.php
├── projects/
│   └── auth/
│       ├── index.php
│       ├── register.php
│       ├── login.php
│       ├── logout.php
│       ├── dashboard.php
│       ├── profile.php
│       ├── includes/
│       │   ├── auth.php
│       │   ├── header.php
│       │   └── footer.php
│       └── data/
│           └── users.json
└── notes/
    └── security_notes.md
```

---

## Code Examples

### Secure Password Hashing
```php
// Registration
$hash = password_hash($password, PASSWORD_DEFAULT);

// Login
if (password_verify($inputPassword, $storedHash)) {
    // Successful login
}
```

### Authorization Check
```php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
```

---

## Resources

- [PHP Manual: Sessions](https://www.php.net/manual/en/book.session.php)
- [PHP Manual: Cookies](https://www.php.net/manual/en/features.cookies.php)
- [PHP Manual: password_hash](https://www.php.net/manual/en/function.password-hash.php)
- [OWASP Session Management](https://cheatsheetseries.owasp.org/cheatsheets/Session_Management_Cheat_Sheet.html)

---

## Completion Criteria

- [ ] Understand the difference between sessions and cookies
- [ ] Can create a registration/login system
- [ ] Passwords are stored securely (hashed)
- [ ] Protected pages are inaccessible without login
- [ ] Flash messages work
