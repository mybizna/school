<?php

namespace Modules\School\Filament;

use Coolsam\Modules\Concerns\ModuleFilamentPlugin;
use Filament\Contracts\Plugin;
use Filament\Panel;

class SchoolPlugin implements Plugin
{
    use ModuleFilamentPlugin;

    public function getModuleName(): string
    {
        return 'School';
    }

    public function getId(): string
    {
        return 'school';
    }

    public function boot(Panel $panel): void
    {
        // TODO: Implement boot() method.
    }
}
