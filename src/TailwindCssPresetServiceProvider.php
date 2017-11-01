<?php

namespace LaravelFrontendPresets\TailwindCssPreset;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;

class TailwindCssPresetServiceProvider extends ServiceProvider
{
    public function boot()
    {
        PresetCommand::macro('tailwindcss', function ($command) {
            TailwindPreset::install();

            $command->info('Tailwind CSS scaffolding installed successfully.');
            $command->info('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });

        PresetCommand::macro('tailwindcss-auth', function ($command) {
            TailwindPreset::installAuth();

            $command->info('Tailwind CSS scaffolding with auth views installed successfully.');
            $command->info('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });
    }
}
