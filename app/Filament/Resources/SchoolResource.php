<?php

namespace Modules\School\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\School\Models\School;

class SchoolResource extends BaseResource
{
    protected static ?string $model = School::class;

    protected static ?string $slug = 'school/school';

    protected static ?string $navigationGroup = 'School';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


}
