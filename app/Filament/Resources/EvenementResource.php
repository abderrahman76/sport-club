<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EvenementResource\Pages;
use App\Filament\Resources\EvenementResource\RelationManagers;
use App\Filament\Resources\EvenementResource\Widgets\eventChart;
use App\Filament\Resources\EvenementResource\Widgets\eventStatsOverview;
use App\Models\Evenement;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Tables\Filters\Filter;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EvenementResource extends Resource
{
    protected static ?string $model = Evenement::class;

    protected static ?string $navigationIcon = 'bx-calendar-event';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\DateTimePicker::make('date')
                    ->required(),
                Forms\Components\Toggle::make('isPremium')
                    ->required(),
                Forms\Components\TextInput::make('image')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('maxParticipant')
                    ->numeric()
                    ->required(),
                    Forms\Components\TextInput::make('points')
                    ->numeric()
                    ->required(),
                    Select::make('centre_id')
                    ->relationship('centre', 'name')
                    ->preload()
                    ->searchable()    
                    ->label('centre')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->toggleable()->circular(),
                Tables\Columns\TextColumn::make('name')->color('primary'),
                Tables\Columns\TextColumn::make('description')
                ->tooltip(fn (Evenement $record): string => "{$record->description}")
                ->limit(30)
                ->sortable()
                ->searchable()
                ->toggleable(),
                Tables\Columns\TextColumn::make('date')
                    ->dateTime(),
                Tables\Columns\IconColumn::make('isPremium')
                    ->boolean(),
                Tables\Columns\TextColumn::make('maxParticipant'),
                Tables\Columns\TextColumn::make('points'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()->toggleable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()->toggleable(),
            ])
            ->filters([
                Filter::make('isPremium')
    ->query(fn (Builder $query): Builder => $query->where('isPremium', true))
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
            eventStatsOverview::class,
            
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvenements::route('/'),
            'create' => Pages\CreateEvenement::route('/create'),
            'edit' => Pages\EditEvenement::route('/{record}/edit'),
        ];
    }    
}
