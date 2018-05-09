# Laravel 5.5+ Frontend preset for Tailwind CSS

A Laravel front-end scaffolding preset for [Tailwind CSS](https://tailwindcss.com) - a Utility-First CSS Framework for Rapid UI Development.

*Current version:* **Tailwind CSS 0.5.2**

## Usage

1. Fresh install Laravel >= 5.5.0 and cd to your app.
2. Install this preset via `composer require laravel-frontend-presets/tailwindcss`. Laravel will automatically discover this package. No need to register the service provider.
3. Use `php artisan preset tailwindcss` for the basic Tailwind CSS preset OR use `php artisan preset tailwindcss-auth` for the basic preset, auth route entry and Tailwind CSS auth views in one go. (NOTE: If you run this command several times, be sure to clean up the duplicate Auth entries in `routes/web.php`)
4. `npm install && npm run dev && npm run dev` (this is required twice, due to the way that `laravel-mix-tailwind` installs the Tailwind CSS dependency)
5. Configure your favorite database (mysql, sqlite etc.)
6. `php artisan migrate` to create basic user tables.
7. `php artisan serve` (or equivalent) to run server and test preset.

### Changing colours

If you want to change the default orange colour being used, update the `brand-{modifier}` values in your `tailwind.js` file. You are of course free to modify this file as you see fit, and even remove and replace the brand configuration in the scaffolded views entirely.

### Screenshots

![Welcome](/screenshots/welcome.png)

![Register](/screenshots/register.png)

![Login](/screenshots/login.png)

![Send Password Reset](/screenshots/send-password-reset.png)

![Reset Password](/screenshots/reset-password.png)

![Dashboard](/screenshots/dashboard.png)
