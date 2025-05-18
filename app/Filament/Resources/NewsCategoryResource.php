<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use App\Models\NewsCategory;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\NewsCategoryResource\Pages;
use App\Filament\Resources\NewsCategoryResource\RelationManagers;

class NewsCategoryResource extends Resource
{
    protected static ?string $model = NewsCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Berita';

    protected static ?string $navigationLabel = 'Kategori';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('kategori')
                    ->label('Nama Kategori')
                    ->columnSpanFull()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                TextInput::make('slug')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListNewsCategories::route('/'),
            'create' => Pages\CreateNewsCategory::route('/create'),
            'view' => Pages\ViewNewsCategory::route('/{record}'),
            'edit' => Pages\EditNewsCategory::route('/{record}/edit'),
        ];
    }
}
