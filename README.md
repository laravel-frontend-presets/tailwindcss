# Laravel 7.0+ Frontend preset for Tailwind CSS

A Laravel front-end scaffolding preset for [Tailwind CSS](https://tailwindcss.com) - a Utility-First CSS Framework for Rapid UI Development.

## Usage

1. Fresh install Laravel >= 7.0 and `cd` to your app.
2. Install this preset via `composer require laravel-frontend-presets/tailwindcss --dev`. Laravel will automatically discover this package. No need to register the service provider.

### a. For Presets without Authentication

1. Use `php artisan ui tailwindcss` for the basic Tailwind CSS preset
2. `npm install && npm run dev`
3. `php artisan serve` (or equivalent) to run server and test preset.

### b. For Presets with Authentication

1. Use `php artisan ui tailwindcss --auth` for the basic preset, auth route entry, and Tailwind CSS auth views in one go. (NOTE: If you run this command several times, be sure to clean up the duplicate Auth entries in `routes/web.php`)
4. `npm install && npm run dev`
5. Configure your favorite database (mysql, sqlite etc.)
6. `php artisan migrate` to create basic user tables.
7. `php artisan serve` (or equivalent) to run server and test preset.

### Config

The default `tailwind.config.js` configuration file included by this package simply uses the config from the Tailwind vendor files. Should you wish to make changes, you should remove the file and run `node_modules/.bin/tailwind init`, which will generate a fresh configuration file for you, which you are free to change to suit your needs.

Add a new i18n string in the `resources/lang/XX/pagination.php` file for each language that your app uses:
```php
'previous' => '&laquo; Previous',
'next' => 'Next &raquo;',
'goto_page' => 'Goto page #:page', // Add this line
```
This should help with accessibility
```html
<li>
    <a href="URL?page=2" class="..."
       aria-label="Goto page #2"
    >
        2
    </a>
</li>
```

#### Pagination
Laravel now supports Tailwind CSS pagination directly. If you would like to use these views in your app, you can refer to [docs](https://laravel.com/docs/master/pagination#using-tailwind).

### Screenshots

![Welcome](/screenshots/welcome.png)

![Register](/screenshots/register.png)

![Login](/screenshots/login.png)

![Reset Password](/screenshots/reset-password.png)

![Dashboard](/screenshots/dashboard.png)

![Verify](/screenshots/verify.png)
