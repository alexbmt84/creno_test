<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('scientific_name'),
                Forms\Components\TextInput::make('price')->required(),
                Forms\Components\TextInput::make('description')->required(),
                Select::make('entity_id')->relationship(name: 'entity', titleAttribute: 'name')->required(),
                Select::make('level1_id')->relationship(name: 'level1', titleAttribute: 'name')->required(),
                Select::make('level2_id')->relationship(name: 'level2', titleAttribute: 'name')->required(),
                Select::make('tva_id')->relationship(name: 'tva', titleAttribute: 'name')->required(),
                Forms\Components\TextInput::make('available')->required(),
                Forms\Components\TextInput::make('net_weight')->required(),
                Forms\Components\FileUpload::make('picture'),
                Select::make('certification_id')->multiple()->relationship(name: 'certifications', titleAttribute: 'name')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('scientific_name'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('entity.name'),
                Tables\Columns\TextColumn::make('level1.name'),
                Tables\Columns\TextColumn::make('level2.name'),
                Tables\Columns\TextColumn::make('tva.name'),
                Tables\Columns\TextColumn::make('available'),
                Tables\Columns\TextColumn::make('net_weight'),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }

    protected function handleRecordCreation(array $data): Model
    {
        return static::getModel()::create($data);
    }

}
