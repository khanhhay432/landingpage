# suakhoatannoi - Laravel scaffold (starter)
This repository is a **scaffold** for a Laravel-based landing page and CMS for a locksmith on-demand website.

## What is included
- Migrations for the database schema you provided.
- Eloquent Models with relationships.
- Basic Controllers and routes for a landing page, services, posts, and contact form.
- Blade views for the landing page and layouts (Tailwind-friendly classes).
- Seeders example and SQL export file.
- Instructions to finish installation and run the project locally.

> **Note:** This is a code scaffold only — you must run `composer install`, `npm install`, and `php artisan` commands in a real Laravel environment to make it runnable.

## Quick setup (on your machine)
1. Clone or unzip scaffold into your project folder.
2. Run `composer create-project laravel/laravel .` to install Laravel core, or run `composer install` if you have `composer.json` and vendor present.
3. Copy the scaffold files into the Laravel project root (they assume standard Laravel layout).
4. Set up `.env` file and database credentials.
5. Run `php artisan migrate --seed` to create tables and seed sample data.
6. `php artisan storage:link`
7. `npm install && npm run build` (optional for assets)
8. `php artisan serve` to run locally.

## Files inside
- `database/migrations/` : migrations for users, categories, services, images, posts, contacts, reviews, site_settings
- `app/Models/` : Eloquent models
- `app/Http/Controllers/` : Controllers for landing, services, posts, contact
- `routes/web.php` : Web routes
- `resources/views/` : Blade templates for landing and basic pages
- `database/seeders/DatabaseSeeder.php` : sample seeder
- `sql/schema.sql` : original SQL schema export

If you want, I can tailor this scaffold into a fully runnable Laravel project (generate composer.json, install packages, or create a zip that includes vendor), but I cannot run composer or npm from here — that must be done on your machine or server.
