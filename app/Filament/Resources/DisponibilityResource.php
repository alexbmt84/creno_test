<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DisponibilityResource\Pages;
use App\Filament\Resources\DisponibilityResource\RelationManagers;
use App\Models\Disponibility;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DisponibilityResource extends Resource
{
    protected static ?string $model = Disponibility::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\DatePicker::make('start')->required(),
                Forms\Components\DatePicker::make('end')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('start'),
                Tables\Columns\TextColumn::make('end'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDisponibilities::route('/'),
            'create' => Pages\CreateDisponibility::route('/create'),
            'edit' => Pages\EditDisponibility::route('/{record}/edit'),
        ];
    }
}
