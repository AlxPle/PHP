# Environment setup — Fedora KDE (Personal)

This document contains step-by-step instructions to set up a PHP development environment on Fedora Linux (KDE Plasma). It's intended for local/personal use.

1. System and package updates

- Update system packages:
  sudo dnf update -y

2. Install PHP and common extensions

- Install PHP and commonly used extensions (MySQL, SQLite, CLI, FPM):
  sudo dnf install -y php php-cli php-fpm php-mbstring php-xml php-json php-pdo php-mysqlnd php-sqlite3

- Enable and start php-fpm if you use nginx:
  sudo systemctl enable --now php-fpm

3. Composer (dependency manager)

- Install Composer:
  sudo dnf install -y composer
- Verify:
  composer --version

4. Database servers

- MariaDB (MySQL compatible):
  sudo dnf install -y mariadb-server mariadb
  sudo systemctl enable --now mariadb
  sudo mysql_secure_installation

- SQLite (file-based) — no server install required; ensure php-sqlite3 is installed.

5. Web server (quick options)

- Built-in PHP server (for examples and quick tests):
  cd path/to/example
  php -S localhost:8000

- nginx + php-fpm (for a more realistic stack):
  sudo dnf install -y nginx
  sudo systemctl enable --now nginx

6. Xdebug (debugging)

- Install Xdebug (package or pecl depending on PHP version):
  sudo dnf install -y php-pecl-xdebug
- Restart php-fpm/nginx after installation.
- Configure your IDE (VS Code, PhpStorm) to listen for Xdebug.

7. Tools and editors

- Recommended editors:
  - VS Code + extensions: PHP Intelephense, PHP Debug, PHP CS Fixer
  - PhpStorm (commercial)
  - Kate / KDevelop / Neovim as alternatives for KDE users

- Terminal: Konsole

8. Git and GitHub CLI

- Install git and gh:
  sudo dnf install -y git gh
- Make repository private on GitHub (if stored remotely):
  gh auth login
  gh repo edit AlxPle/PHP --visibility private

9. Environment variables and secrets

- Keep secrets out of the repository. Use a local .env file and add it to .gitignore.
- Consider vlucas/phpdotenv for loading env variables in PHP projects.

10. Recommended .gitignore (starter)
vendor/
.env
data/
.idea/
.vscode/
public/uploads/

11. Quick checklist to run examples

- Run contact form example:
  cd examples/contact-form
  php -S localhost:8000
- Run todo-pdo (if present):
  cd examples/todo-pdo
  php -S localhost:8000 -t public

12. Docker (optional)

- Use Docker if you want isolated environments or multiple PHP versions.

13. Notes

- Restart services after installing packages if needed:
  sudo systemctl restart php-fpm
  sudo systemctl restart nginx
- For Fedora KDE specifics, use KDE settings and Konsole profiles for convenience.

---