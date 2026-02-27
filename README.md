# Laravel 12 + PHP 8.2 + Nginx Starter (Frontend + Admin + GraphQL CRUD)

This project now includes the **required Laravel application bootstrap files** (`artisan`, `config/*`, providers, storage structure), so `composer install` can bootstrap the framework correctly.

## Features

- Frontend catalog pages.
- Customer registration/login/logout.
- Admin login + protected admin dashboard.
- Admin CRUD for `categories` and `products`.
- GraphQL CRUD for categories/products (`graphql/schema.graphql`).
- Docker setup with Nginx + PHP-FPM + MySQL.

## Quick start (Docker)

```bash
docker compose up -d --build
```

Run setup inside the PHP container:

```bash
docker compose exec app composer install
docker compose exec app cp .env.example .env
docker compose exec app php artisan key:generate
docker compose exec app php artisan migrate
```

Open app: <http://localhost:8080>

## If `php artisan` / `artisan list` is not working

1. Ensure `vendor/` exists after install:
   ```bash
   ls -la vendor/autoload.php
   ```
2. Ensure project root contains executable `artisan`:
   ```bash
   ls -la artisan
   ```
3. Rebuild autoload files:
   ```bash
   composer dump-autoload
   ```
4. Validate framework bootstrap:
   ```bash
   php artisan about
   php artisan list
   ```

If step 1 fails, your dependency installation did not complete (usually network/proxy/auth issues with Packagist/GitHub).
