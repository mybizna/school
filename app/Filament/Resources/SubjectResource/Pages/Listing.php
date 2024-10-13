<?php

namespace Modules\School\Filament\Resources\SubjectResource\Pages;

use Modules\Base\Filament\Resources\Pages\ListingBase;
use Modules\School\Filament\Resources\SubjectResource;

// Class List that extends ListBase
class Listing extends ListingBase
{
    protected static string $resource = SubjectResource::class;
}
