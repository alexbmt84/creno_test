<?php

namespace App\Filament\Resources\Level2Resource\Pages;

use App\Filament\Resources\Level2Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLevel2 extends EditRecord
{
    protected static string $resource = Level2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
