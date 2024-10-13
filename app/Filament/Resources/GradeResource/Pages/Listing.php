<?php

namespace Modules\School\Filament\Resources\GradeResource\Pages;

use Modules\Base\Filament\Resources\Pages\ListingBase;
use Modules\School\Filament\Resources\GradeResource;

// Class List that extends ListBase
class Listing extends ListingBase
{
    protected static string $resource = GradeResource::class;
}
