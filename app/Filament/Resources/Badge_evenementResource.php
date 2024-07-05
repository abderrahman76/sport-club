<?php

namespace App\Filament\Resources;

use App\Filament\Resources\Badge_evenementRecource\Widgets\eventChart;
use App\Filament\Resources\Badge_evenementResource\Pages;
use App\Filament\Resources\Badge_evenementResource\RelationManagers;
use App\Models\Badge_evenement;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class Badge_evenementResource extends Resource
{
    
    protected static ?string $model = Badge_evenement::class;

    protected static ?string $navigationIcon = 'heroicon-o-identification';

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
                Select::make('evenement_id')
                    ->relationship('evenement', 'name')
                    ->preload()
                    ->searchable()    
                    ->label('evenement')
                    ->required(),
                    Forms\Components\TextInput::make('user_code')
                    ->required()
                    ->maxLength(255),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')->sortable()->searchable()->toggleable(),
                TextColumn::make('evenement.name')->sortable()->searchable()->toggleable(),
                TextColumn::make('user_code')->sortable()->searchable()->toggleable(),
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
    public static function getWidgets(): array
    {
        return [
            eventChart::class,
            
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBadge_evenements::route('/'),
            'create' => Pages\CreateBadge_evenement::route('/create'),
            'edit' => Pages\EditBadge_evenement::route('/{record}/edit'),
        ];
    }    
}
