<?php

namespace App\Filament\Resources\GymsResource\Pages;

use App\Filament\Resources\GymsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGyms extends ListRecords
{
    protected static string $resource = GymsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
