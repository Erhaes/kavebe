<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Introduction;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\IntroductionResource\Pages;
use App\Filament\Resources\IntroductionResource\RelationManagers;
use App\Models\Team;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\TextColumn;

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
                RichEditor::make('pengantar')
                    ->columnSpanFull(),
                Select::make('team_id')
                    ->options(Team::all()->pluck('nama', 'id'))
                    ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('pengantar')
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
