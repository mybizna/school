<?php

namespace Modules\School\Filament\Resources\ClassYearResource\Pages;

use Modules\School\Filament\Resources\ClassYearResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClassYears extends ListRecords
{
    protected static string $resource = ClassYearResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
