<?php

namespace App\Filament\Resources\DisponibilityResource\Pages;

use App\Filament\Resources\DisponibilityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDisponibility extends EditRecord
{
    protected static string $resource = DisponibilityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
