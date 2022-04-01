<?php

namespace App\Filament\Resources\FrameworkResource\Pages;

use App\Filament\Resources\FrameworkResource;
use Filament\Resources\Pages\CreateRecord;

class CreateFramework extends CreateRecord
{
    protected static string $resource = FrameworkResource::class;


    protected function mutateFormDataBeforeCreate(array $data): array
    {
        return $data;
    }
}
