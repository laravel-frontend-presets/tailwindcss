# Tailwind CSS preset for the Laravel framework

A Laravel front-end scaffolding preset for [Tailwind CSS](https://tailwindcss.com) - a Utility-First CSS Framework for Rapid UI Development.

### Installing
```bash
composer require dyrynda/laravel-preset-tailwind
```

### Setting up the new preset
```bash
php artisan preset tailwind
```

### Auth scaffolding
```bash
php artisan preset tailwind-auth
```

### Compiling assets
```bash
npm install && npm run dev
```

Enjoy!

### Changing colours

If you want to change the default orange colour being used, update the `brand-{modifier}` values in your `tailwind.js` file.

### Screenshots

![Welcome](/screenshots/welcome.png)

![Register](/screenshots/register.png)

![Login](/screenshots/login.png)

![Send Password Reset](/screenshots/send-password-reset.png)

![Reset Password](/screenshots/reset-password.png)

![Dashboard](/screenshots/dashboard.png)
