<?php

namespace Modules\School\Filament\Resources\ClassYearResource\Pages;

use Modules\Base\Filament\Resources\Pages\ListingBase;
use Modules\School\Filament\Resources\ClassYearResource;

// Class List that extends ListBase
class Listing extends ListingBase
{
    protected static string $resource = ClassYearResource::class;
}
