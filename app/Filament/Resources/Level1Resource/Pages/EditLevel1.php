<?php

namespace App\Filament\Resources\Level1Resource\Pages;

use App\Filament\Resources\Level1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLevel1 extends EditRecord
{
    protected static string $resource = Level1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
