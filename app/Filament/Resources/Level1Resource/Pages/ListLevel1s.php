<?php

namespace App\Filament\Resources\Level1Resource\Pages;

use App\Filament\Resources\Level1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLevel1s extends ListRecords
{
    protected static string $resource = Level1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
