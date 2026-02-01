# Environment setup — Fedora KDE (Personal)

This document contains step-by-step instructions to set up a PHP development environment on Fedora Linux (KDE Plasma). It's intended for local/personal use.

## 1. System and package updates

- Update system packages:
  ```sh
  sudo dnf update -y
  ```


## 2. Local PHP server

To quickly test PHP scripts, you can use the built-in PHP development server:

```sh
php -S localhost:8000
```

This command will start a local server in the current directory. Open http://localhost:8000 in your browser to view your PHP files.

You can stop the server at any time by pressing Ctrl+C in the terminal.

---

*Other setup steps will be added as needed during learning and development.*