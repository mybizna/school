<?php

namespace Modules\School\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\School\Models\Subject;

class SubjectResource extends BaseResource
{
    protected static ?string $model = Subject::class;

    protected static ?string $slug = 'school/subject';

    protected static ?string $navigationGroup = 'School';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


}
