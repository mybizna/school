<?php

namespace Modules\School\Filament\Resources\GradSubjectResource\Pages;

use Modules\School\Filament\Resources\GradSubjectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGradSubject extends EditRecord
{
    protected static string $resource = GradSubjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
