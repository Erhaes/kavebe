<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IntroductionResource\Pages;
use App\Filament\Resources\IntroductionResource\RelationManagers;
use App\Models\Introduction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class IntroductionResource extends Resource
{
    protected static ?string $model = Introduction::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Profil';

    protected static ?string $navigationLabel = 'Pengantar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
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
            'index' => Pages\ListIntroductions::route('/'),
            'create' => Pages\CreateIntroduction::route('/create'),
            'view' => Pages\ViewIntroduction::route('/{record}'),
            'edit' => Pages\EditIntroduction::route('/{record}/edit'),
        ];
    }
}
