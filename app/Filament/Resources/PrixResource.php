<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PrixResource\Pages;
use App\Filament\Resources\PrixResource\RelationManagers;
use App\Models\Prix;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PrixResource extends Resource
{
    protected static ?string $model = Prix::class;

    protected static ?string $navigationIcon = 'heroicon-o-gift';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('image')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('pointsRequired')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable()->toggleable(),
                Tables\Columns\ImageColumn::make('image')->toggleable()->circular(),
                Tables\Columns\TextColumn::make('pointsRequired')->sortable()->searchable()->toggleable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()->toggleable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()->toggleable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListPrixes::route('/'),
            'create' => Pages\CreatePrix::route('/create'),
            'edit' => Pages\EditPrix::route('/{record}/edit'),
        ];
    }    
}
