# Docker Setup Guide for Stage2_Forms

This guide provides step-by-step instructions for setting up Docker and Docker Compose for PHP + MySQL + phpMyAdmin, based on the workflow you completed.

---

## 1. Install Docker and Docker Compose (Fedora KDE)

```bash
sudo dnf install docker docker-compose
sudo systemctl start docker
sudo systemctl enable docker
sudo usermod -aG docker $USER
```
> **Note:** Log out and log back in after adding your user to the `docker` group.

---

## 2. Create `docker-compose.yml`

Place this file in the directory:

```yaml
services:
  php:
    image: php:8.1-cli
    volumes:
      - ./:/var/www/html
    ports:
      - "8000:8000"
    working_dir: /var/www/html
    command: php -S 0.0.0.0:8000

  mysql:
    image: mysql:8.0
    environment:
      MYSQL_ROOT_PASSWORD: root
      MYSQL_DATABASE: testdb
    ports:
      - "3306:3306"

  phpmyadmin:
    image: phpmyadmin/phpmyadmin
    environment:
      PMA_HOST: mysql
      PMA_PORT: 3306
      MYSQL_ROOT_PASSWORD: root
    ports:
      - "8080:80"
```

## 3. Start the Docker Containers

Run the following command in the terminal from the directory containing `docker-compose.yml`:

```bash
sudo docker-compose up -d
```
This will start the PHP server, MySQL database, and phpMyAdmin in detached mode.
You can access the PHP server at http://localhost:8000 and phpMyAdmin at http://localhost:8080.
To stop the containers, use:

```bash
sudo docker-compose down
```


