# Copilot / AI agent instructions for Landingpage-suakhoa

This file tells an AI coding assistant how this codebase is organized and the concrete conventions to follow when making edits.

Keep this short and actionable. Prefer making small, verifiable edits and running the project's existing checks.

1) Big picture (how things connect)
- Routes are defined in `routes/web.php` and map to controller actions (e.g. `LandingController@index`, `ServiceController@show`). Typical flow: Route -> Controller -> Model -> View (Blade templates in `resources/views`).
- Controllers live in `app/Http/Controllers`, models in `app/Models`, and views in `resources/views`.
- Configuration is in `config/`; migrations live in `database/migrations` and seeds in `database/seeders`.

2) Key files to inspect for context
- `routes/web.php` — primary routing surface and example route names (`home`, `service.show`, `post.show`, `contact.store`).
- `app/Models/SiteSetting.php` — site settings model: primary key is `setting_key` (string), `timestamps = false`, `incrementing = false`. Use this pattern when editing or reading settings.
- `resources/views/partials/header.blade.php` — example of Blade usage and how settings are pulled into views.
- `composer.json` — PHP dependencies and autoload PSR-4 mapping (App\ -> app/).
- `package.json` and `vite.config.js` — front-end build (Vite). Scripts: `npm run dev` (vite dev), `npm run build` (vite build).
- `phpunit.xml` — test config: tests use sqlite in-memory (DB_CONNECTION=sqlite, DB_DATABASE=:memory:). When adding tests, ensure they work under this environment.

3) Developer workflows & commands (concrete)
- Install PHP deps: `composer install` (or `php composer.phar install`).
- Install JS deps: `npm install`.
- Run front-end dev server: `npm run dev` (uses Vite). Build assets: `npm run build`.
- Run app locally (two options):
  - If `artisan` supports serve: `php artisan serve` (try first). Otherwise run the PHP built-in server from project root: `php -S localhost:8000 -t public` and open http://localhost:8000.
- Run tests: PHPUnit is installed in `vendor`. On *nix: `./vendor/bin/phpunit`. On Windows `vendor\\bin\\phpunit` or `php vendor\\bin\\phpunit` (phpunit.xml sets an in-memory sqlite DB for tests).

4) Patterns & project-specific conventions
- Models may disable timestamps and set non-incrementing string PKs (see `SiteSetting`). When updating mass assignment, prefer using `protected $fillable` as shown.
- Blade templates are used for views; partials live in `resources/views/partials`. Keep markup changes minimal and update CSS in `resources/css` or `public/css` depending on the change.
- Route naming is used in templates (e.g. `route('service.show', $slug)`). When changing routes, update all call-sites.
- Authentication middleware: routes under `Route::middleware('auth')->group(...)` restrict access; use `AuthController` for login/logout flows.

5) Database and migrations
- Migrations are in `database/migrations`. There is also `sql/schema.sql` if you need a quick snapshot of the intended schema.
- Seeds: `database/seeders/DatabaseSeeder.php`.

6) Tests & CI expectations
- Unit and feature tests live under `tests/Unit` and `tests/Feature` respectively. PHPUnit config (phpunit.xml) uses an in-memory sqlite DB — write tests to be self-contained and not rely on local MySQL.

7) When editing code, safety checklist (always run these locally)
- Run `composer install` then `npm install` if touching dependencies or assets.
- Run `npm run dev` or `npm run build` if you modify front-end assets.
- Run `php vendor/bin/phpunit` and fix any failing tests you introduce. phpunit.xml already provides test env variables.
- Check routes in `routes/web.php` and update view call-sites for renamed route names.

8) Examples (copyable snippets)
- Read site setting in a controller or view (SiteSetting uses string key):
  - Model: `App\\Models\\SiteSetting` — primary key `setting_key`.
- Start dev assets: `npm run dev`
- Run tests: `php vendor\\bin\\phpunit`

9) What *not* to change without asking
- Global framework wiring in `bootstrap/` and `app/providers.php` unless you fully understand the boot process.
- The `public/` directory layout used for the PHP server root.

10) If something is missing
- If you need an environment file or discover environment-specific behavior, ask the maintainer or check `sql/schema.sql` and migrations before creating new migrations.

If anything here is unclear or you want more examples (controller->model->view flow, typical auth flow, or how to run the app on Windows), say which area to expand and I'll iterate.
