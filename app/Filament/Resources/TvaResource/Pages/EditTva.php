<?php

namespace App\Filament\Resources\TvaResource\Pages;

use App\Filament\Resources\TvaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTva extends EditRecord
{
    protected static string $resource = TvaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
