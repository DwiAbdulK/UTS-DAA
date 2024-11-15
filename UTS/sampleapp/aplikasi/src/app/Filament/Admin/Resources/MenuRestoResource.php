<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\MenuRestoResource\Pages;
use App\Filament\Admin\Resources\MenuRestoResource\RelationManagers;
use App\Models\MenuResto;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MenuRestoResource extends Resource
{
    protected static ?string $model = MenuResto::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Menu')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Kategori')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Keterangan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Harga')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('Ketersediaan')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Menu')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Kategori')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Keterangan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Harga')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Ketersediaan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListMenuRestos::route('/'),
            'create' => Pages\CreateMenuResto::route('/create'),
            'edit' => Pages\EditMenuResto::route('/{record}/edit'),
        ];
    }
}
