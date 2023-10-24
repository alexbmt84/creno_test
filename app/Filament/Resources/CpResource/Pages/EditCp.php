<?php

namespace App\Filament\Resources\CpResource\Pages;

use App\Filament\Resources\CpResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCp extends EditRecord
{
    protected static string $resource = CpResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
