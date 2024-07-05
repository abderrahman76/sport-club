<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AvantageResource\Pages;
use App\Filament\Resources\AvantageResource\RelationManagers;
use App\Models\Avantage;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AvantageResource extends Resource
{
    protected static ?string $model = Avantage::class;

    protected static ?string $navigationIcon = 'bx-check-shield';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('contenu')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('contenu')->searchable(),
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
            'index' => Pages\ListAvantages::route('/'),
            'create' => Pages\CreateAvantage::route('/create'),
            'edit' => Pages\EditAvantage::route('/{record}/edit'),
        ];
    }    
}
