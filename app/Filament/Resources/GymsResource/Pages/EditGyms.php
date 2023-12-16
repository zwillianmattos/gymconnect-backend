<?php

namespace App\Filament\Resources\GymsResource\Pages;

use App\Filament\Resources\GymsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGyms extends EditRecord
{
    protected static string $resource = GymsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
