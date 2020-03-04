<?php

namespace LaravelFrontendPresets\TailwindCssPreset;

use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;

class TailwindCssPresetServiceProvider extends ServiceProvider
{
    public function boot()
    {
        UiCommand::macro('tailwindcss', function ($command) {
            TailwindCssPreset::install();

            $command->info('Tailwind CSS scaffolding installed successfully.');
            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });

        UiCommand::macro('tailwindcss-auth', function ($command) {
            TailwindCssPreset::installAuth();

            $command->info('Tailwind CSS scaffolding with auth views installed successfully.');
            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });
    }
}
