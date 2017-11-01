# Laravel 5.5.x Frontend preset for Tailwind CSS

A Laravel front-end scaffolding preset for [Tailwind CSS](https://tailwindcss.com) - a Utility-First CSS Framework for Rapid UI Development.

*Current version:* **Tailwind CSS 0.1.0**

## Usage

1. Fresh install Laravel 5.5.x and cd to your app.
2. Install this preset via `composer require laravel-frontend-presets/tailwindcss`. Laravel 5.5.x will automatically discover this package. No need to register the service provider.
3. Use `php artisan preset tailwindcss` for the basic Tailwind CSS preset OR use `php artisan preset tailwindcss-auth` for the basic preset, auth route entry and Tailwind CSS auth views in one go. (NOTE: If you run this command several times, be sure to clean up the duplicate Auth entries in `routes/web.php`)
4. `npm install`
5. `npm run dev`
6. Configure your favorite database (mysql, sqlite etc.)
7. `php artisan migrate` to create basic user tables.
8. `php artisan serve` (or equivalent) to run server and test preset.

### Changing colours

If you want to change the default orange colour being used, update the `brand-{modifier}` values in your `tailwind.js` file.

### Screenshots

![Welcome](/screenshots/welcome.png)

![Register](/screenshots/register.png)

![Login](/screenshots/login.png)

![Send Password Reset](/screenshots/send-password-reset.png)

![Reset Password](/screenshots/reset-password.png)

![Dashboard](/screenshots/dashboard.png)
