<?php

namespace LaravelFrontendPresets\TailwindCssPreset;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;

class TailwindCssPresetServiceProvider extends ServiceProvider
{
    public function boot()
    {
        PresetCommand::macro('tailwindcss', function ($command) {
            TailwindCssPreset::install();

            $command->info('Tailwind CSS scaffolding installed successfully.');
            $command->info('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });

        PresetCommand::macro('tailwindcss-auth', function ($command) {
            TailwindCssPreset::installAuth();

            $command->info('Tailwind CSS scaffolding with auth views installed successfully.');
            $command->info('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });

        Paginator::defaultView('pagination::default');

        Paginator::defaultSimpleView('pagination::simple-default');
    }
}
