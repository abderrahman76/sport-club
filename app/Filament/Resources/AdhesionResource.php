<?php

namespace App\Filament\Resources;

use Filament\Forms\Components\Select;

use App\Filament\Resources\AdhesionResource\Pages;
use App\Filament\Resources\AdhesionResource\RelationManagers;
use App\Filament\Resources\AdhesionResource\Widgets\AdhesionChart;
use App\Models\Adhesion;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Filters\Filter;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AdhesionResource extends Resource
{
    protected static ?string $model = Adhesion::class;

    protected static ?string $navigationIcon = 'bxs-coupon';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                select::make('sport_id')
                    ->relationship('sport', 'name')
                    ->preload()
                    ->searchable()
                    ->label('sport')
                    ->required(),
                Select::make('name')
                    ->options([
                        "BASIC" => "BASIC",
                        "STANDARD" => "STANDARD",
                        "PREMIUM" => "PREMIUM",


                    ])
                    ->required(),
                Forms\Components\TextInput::make('subcode')
                    ->required(),
                Forms\Components\Toggle::make('isOffre')
                    ->required(),
                Forms\Components\TextInput::make('prix')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('points')
                    ->numeric()
                    ->required(),
                Select::make('avantage')
                    ->multiple()
                    ->relationship('avantage', 'contenu')
                    ->maxItems(11)
                    ->preload(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('sport.name')->sortable()->searchable()->toggleable(),
                TextColumn::make('name')->searchable(),
                TextColumn::make('subcode'),
                IconColumn::make('isOffre')
                    ->boolean(),
                TextColumn::make('prix')->searchable(),
                TextColumn::make('points')->searchable(),
                TextColumn::make('created_at')
                    ->dateTime(),
                TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                Filter::make('isOffre')
    ->query(fn (Builder $query): Builder => $query->where('isOffre', true))
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
            AdhesionChart::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAdhesions::route('/'),
            'create' => Pages\CreateAdhesion::route('/create'),
            'edit' => Pages\EditAdhesion::route('/{record}/edit'),
        ];
    }
}
