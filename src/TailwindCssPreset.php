<?php

namespace LaravelFrontendPresets\TailwindCssPreset;

use Illuminate\Container\Container;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Laravel\Ui\Presets\Preset;
use Symfony\Component\Finder\SplFileInfo;

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
        static::scaffoldController();
        static::scaffoldAuth();
    }

    protected static function updatePackageArray(array $packages)
    {
        return array_merge([
            '@tailwindcss/ui' => '^0.3',
            'autoprefixer' => '^9.6',
            'laravel-mix' => '^5.0.1',
            'postcss-import' => '^12.0',
            'postcss-nested' => '^4.2',
            'tailwindcss' => '^1.8',
            'vue-template-compiler' => '^2.6.11',
        ], Arr::except($packages, [
            'bootstrap',
            'bootstrap-sass',
            'popper.js',
            'laravel-mix',
            'jquery',
        ]));
    }

    protected static function updateStyles()
    {
        tap(new Filesystem, function ($filesystem) {
            $filesystem->deleteDirectory(resource_path('sass'));
            $filesystem->delete(public_path('js/app.js'));
            $filesystem->delete(public_path('css/app.css'));

            if (! $filesystem->isDirectory($directory = resource_path('css'))) {
                $filesystem->makeDirectory($directory, 0755, true);
            }
        });

        copy(__DIR__.'/tailwindcss-stubs/resources/css/app.css', resource_path('css/app.css'));
    }

    protected static function updateBootstrapping()
    {
        copy(__DIR__.'/tailwindcss-stubs/tailwind.config.js', base_path('tailwind.config.js'));

        copy(__DIR__.'/tailwindcss-stubs/webpack.mix.js', base_path('webpack.mix.js'));

        copy(__DIR__.'/tailwindcss-stubs/resources/js/bootstrap.js', resource_path('js/bootstrap.js'));
    }

    protected static function updateWelcomePage()
    {
        (new Filesystem)->delete(resource_path('views/welcome.blade.php'));

        copy(__DIR__.'/tailwindcss-stubs/resources/views/welcome.blade.php', resource_path('views/welcome.blade.php'));
    }

    protected static function scaffoldController()
    {
        if (! is_dir($directory = app_path('Http/Controllers/Auth'))) {
            mkdir($directory, 0755, true);
        }

        $filesystem = new Filesystem;

        collect($filesystem->allFiles(base_path('vendor/laravel/ui/stubs/Auth')))
            ->each(function (SplFileInfo $file) use ($filesystem) {
                $filesystem->copy(
                    $file->getPathname(),
                    app_path('Http/Controllers/Auth/'.Str::replaceLast('.stub', '.php', $file->getFilename()))
                );
            });
    }

    protected static function scaffoldAuth()
    {
        file_put_contents(app_path('Http/Controllers/HomeController.php'), static::compileControllerStub());

        file_put_contents(
            base_path('routes/web.php'),
            "Auth::routes();\n\nRoute::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');\n\n",
            FILE_APPEND
        );

        tap(new Filesystem, function ($filesystem) {
            $filesystem->copyDirectory(__DIR__.'/tailwindcss-stubs/resources/views', resource_path('views'));

            collect($filesystem->allFiles(base_path('vendor/laravel/ui/stubs/migrations')))
                ->each(function (SplFileInfo $file) use ($filesystem) {
                    $filesystem->copy(
                        $file->getPathname(),
                        database_path('migrations/'.$file->getFilename())
                    );
                });
        });
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
