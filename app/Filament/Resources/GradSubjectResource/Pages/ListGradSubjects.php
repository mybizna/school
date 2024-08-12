<?php

namespace Modules\School\Filament\Resources\GradSubjectResource\Pages;

use Modules\School\Filament\Resources\GradSubjectResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGradSubjects extends ListRecords
{
    protected static string $resource = GradSubjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
