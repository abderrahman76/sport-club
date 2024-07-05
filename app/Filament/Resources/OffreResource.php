<?php

namespace App\Filament\Resources;
use Filament\Forms\Components\Select;
use App\Filament\Resources\OffreResource\Pages;
use App\Filament\Resources\OffreResource\RelationManagers;
use App\Models\Offre;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OffreResource extends Resource
{
    protected static ?string $model = Offre::class;

    protected static ?string $navigationIcon = 'bxs-offer';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                select::make('adhesion_id')
                ->relationship('adhesion', 'name')
                ->preload()
                ->searchable()    
                ->label('adhesion')
                ->required(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('discount')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('adhesion_id'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('discount'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListOffres::route('/'),
            'create' => Pages\CreateOffre::route('/create'),
            'edit' => Pages\EditOffre::route('/{record}/edit'),
        ];
    }    
}
