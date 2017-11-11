<?php

namespace LaravelFrontendPresets\TailwindCssPreset;

use Illuminate\Support\Arr;
use Illuminate\Container\Container;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Console\Presets\Preset;

class TailwindCssPreset extends Preset
{
    public static function install()
    {
        static::updatePackages();
        static::updateStyles();
        static::updateBootstrapping();
        static::updateWelcomePage();
        static::removeNodeModules();
    }

    public static function installAuth()
    {
        static::install();
        static::scaffoldAuth();
    }

    protected static function updatePackageArray(array $packages)
    {
        return [
            'tailwindcss' => '^0.1.6',
        ] + Arr::except($packages, ['bootstrap-sass', 'jquery']);
    }

    protected static function updateStyles()
    {
        (new Filesystem)->deleteDirectory(resource_path('assets/sass'));
        (new Filesystem)->delete(public_path('js/app.js'));
        (new Filesystem)->delete(public_path('css/app.css'));

        if (! file_exists(resource_path('assets/css'))) {
            mkdir(resource_path('assets/css'));
        }

        copy(__DIR__.'/tailwindcss-stubs/resources/assets/css/main.css', resource_path('assets/css/main.css'));
    }

    protected static function updateBootstrapping()
    {
        copy(__DIR__.'/tailwindcss-stubs/tailwind.js', base_path('tailwind.js'));
        copy(__DIR__.'/tailwindcss-stubs/webpack.mix.js', base_path('webpack.mix.js'));
        copy(__DIR__.'/tailwindcss-stubs/bootstrap.js', resource_path('assets/js/bootstrap.js'));
    }

    protected static function updateWelcomePage()
    {
        (new Filesystem)->delete(resource_path('views/welcome.blade.php'));

        copy(__DIR__.'/tailwindcss-stubs/views/welcome.blade.php', resource_path('views/welcome.blade.php'));
    }

    protected static function scaffoldAuth()
    {
        file_put_contents(app_path('Http/Controllers/HomeController.php'), static::compileControllerStub());

        file_put_contents(
            base_path('routes/web.php'),
            "Auth::routes();\n\nRoute::get('/home', 'HomeController@index')->name('home');\n\n",
            FILE_APPEND
        );

        (new Filesystem)->copyDirectory(__DIR__.'/tailwindcss-stubs/views', resource_path('views'));
    }

    protected static function compileControllerStub()
    {
        return str_replace(
            '{{namespace}}',
            Container::getInstance()->getNamespace(),
            file_get_contents(__DIR__.'/tailwindcss-stubs/controllers/HomeController.stub')
        );
    }
}
