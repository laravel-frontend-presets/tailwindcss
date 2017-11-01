<?php

namespace Dyrynda\LaravelPresets\Tailwind;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;

class TailwindPresetServiceProvider extends ServiceProvider
{
    public function boot()
    {
        PresetCommand::macro('tailwind', function ($command) {
            TailwindPreset::install();

            $command->info('Tailwind scaffolding installed successfully.');
            $command->info('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });

        PresetCommand::macro('tailwind-auth', function ($command) {
            TailwindPreset::installAuth();

            $command->info('Tailwind scaffolding with auth views installed successfully.');
            $command->info('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });
    }
}
