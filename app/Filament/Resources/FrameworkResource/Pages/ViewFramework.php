<?php

namespace App\Filament\Resources\FrameworkResource\Pages;

use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\FrameworkResource;

class ViewFramework extends ViewRecord
{
    protected static string $resource = FrameworkResource::class;

    protected static string $view = 'filament.resources.framework-resource.pages.view-framework';
}
