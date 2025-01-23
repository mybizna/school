<?php

namespace Modules\School\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\School\Models\ClassYear;

class ClassYearResource extends BaseResource
{
    protected static ?string $model = ClassYear::class;

    protected static ?string $slug = 'school/class/year';

    protected static ?string $navigationGroup = 'School';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

}
