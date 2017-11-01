<?php

namespace Dyrynda\LaravelPresets\Tailwind;

use Illuminate\Support\Arr;
use Illuminate\Container\Container;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Console\Presets\Preset;

class TailwindPreset extends Preset
{
    public static function install()
    {
        static::updatePackages();
        static::updateStyles();
        static::updateBootstrapping();
        static::updateWelcomePage();
        static::removeNodeModules();
    }

    protected static function updatePackageArray(array $packages)
    {
        return [
            'tailwindcss' => '^0.1.0',
        ] + Arr::except($packages, ['bootstrap-sass', 'jquery']);
    }

    protected static function updateStyles()
    {
        (new Filesystem)->deleteDirectory(resource_path('assets/sass'));

        copy(__DIR__.'/tailwind-stubs/resources/assets/css/main.css', resource_path('assets/css/main.css'));
    }

    protected static function updateBootstrapping()
    {
        copy(__DIR__.'/tailwind-stubs/tailwind.js', base_path('tailwind.js'));
        copy(__DIR__.'/tailwind-stubs/bootstrap.js', resource_path('assets/js/bootstrap.js'));
    }

    protected static function updateWelcomePage()
    {
        (new Filesystem)->delete(resource_path('views/welcome.blade.php'));

        copy(__DIR__.'/tailwind-stubs/views/welcome.blade.php', resource_path('views/welcome.blade.php'));
    }
}
