<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HistoryResource\Pages;
use App\Filament\Resources\HistoryResource\RelationManagers;
use App\Models\History;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HistoryResource extends Resource
{
    protected static ?string $model = History::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('entity_id')->relationship(name: 'entity', titleAttribute: 'name')->required(),
                Select::make('offer_id')->relationship(name: 'offer', titleAttribute: 'id')->required(),
                Forms\Components\TextInput::make('name')->required(),
                Select::make('active')->options([
                    '0' => 'False',
                    '1' => 'True',
                ])->required(),
                Select::make('status')->options([
                    'Online' => 'Online',
                    'Offline' => 'Offline',
                ])->required(),
                Forms\Components\DatePicker::make('startWeek')->required(),
                Forms\Components\DatePicker::make('endWeek')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('offer.id'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('entity.name'),
                Tables\Columns\TextColumn::make('active'),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('startWeek'),
                Tables\Columns\TextColumn::make('endWeek'),
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
            'index' => Pages\ListHistories::route('/'),
            'create' => Pages\CreateHistory::route('/create'),
            'edit' => Pages\EditHistory::route('/{record}/edit'),
        ];
    }
}
