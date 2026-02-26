# Laravel 12 + PHP 8.2 + Nginx Starter (Frontend + Admin + GraphQL CRUD)

This repository contains a Laravel 12 project structure prepared for:

- Frontend catalog pages.
- Customer registration/login/logout.
- Admin login and protected admin dashboard.
- Full CRUD for **Categories** and **Products** in admin panel.
- GraphQL CRUD for categories/products plus user queries.
- Nginx + PHP 8.2 + MySQL container setup.

## Entities covered

- `users` (roles: `admin`, `customer`)
- `categories`
- `products`

## GraphQL endpoint

- Route: `/graphql`
- Schema file: `graphql/schema.graphql`

## Run with Docker (Nginx + PHP 8.2)

```bash
docker compose up -d
```

Then install PHP dependencies inside app container (network access required):

```bash
docker compose exec app composer install
docker compose exec app php artisan key:generate
docker compose exec app php artisan migrate
```

App URL: http://localhost:8080

## Important notes

Because package installation depends on external network access, you must run `composer install` in an environment that can access Packagist/GitHub to fully boot the Laravel app.
