<?php

namespace App\Filament\Resources\Level2Resource\Pages;

use App\Filament\Resources\Level2Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLevel2s extends ListRecords
{
    protected static string $resource = Level2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
