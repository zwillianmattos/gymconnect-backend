<?php

namespace App\Filament\App\Resources\MembersResource\Pages;

use App\Filament\App\Resources\MembersResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMembers extends EditRecord
{
    protected static string $resource = MembersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
