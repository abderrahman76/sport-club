<?php

namespace App\Filament\Resources;

use App\Filament\Resources\prix_userResource\Pages;
use App\Filament\Resources\prix_userResource\RelationManagers;
use App\Models\prix_user;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class prix_userResource extends Resource
{
    protected static ?string $model = prix_user::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->preload()
                    ->searchable()    
                    ->label('user')
                    ->required(),
                Select::make('prix_id')
                    ->relationship('prix', 'name')
                    ->preload()
                    ->searchable()    
                    ->label('prix')
                    ->required(),
                    Forms\Components\TextInput::make('prix_code')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')->sortable()->searchable()->toggleable(),
                TextColumn::make('prix.name')->sortable()->searchable()->toggleable(),
                TextColumn::make('prix_code')->sortable()->searchable()->toggleable(),
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
            'index' => Pages\Listprix_users::route('/'),
            'create' => Pages\Createprix_user::route('/create'),
            'edit' => Pages\Editprix_user::route('/{record}/edit'),
        ];
    }    
}
