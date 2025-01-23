<?php

namespace Modules\School\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\School\Models\Grade;

class GradeResource extends BaseResource
{
    protected static ?string $model = Grade::class;

    protected static ?string $slug = 'school/grade';

    protected static ?string $navigationGroup = 'School';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


}
