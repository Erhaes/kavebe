<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Testing;
use Filament\Forms\Set;
use App\Models\Facility;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\TestingResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TestingResource\RelationManagers;
use App\Models\Equipment;
use Dom\Text;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class TestingResource extends Resource
{
    protected static ?string $model = Testing::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Pengujian';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_testing')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                TextInput::make('slug'),
                RichEditor::make('keterangan'),
                TextInput::make('satuan'),
                TextInput::make('harga')
                    ->integer(),
                TextInput::make('catatan'),
                TextInput::make('sampel')
                    ->integer(),
                FileUpload::make('gambar')
                    ->image()
                    ->preserveFilenames(),
                Select::make('facility_id')
                    ->options(Facility::all()->pluck('nama_lab', 'id'))
                    ->searchable(),
                Select::make('equipment_id')
                    ->options(Equipment::all()->pluck('nama_alat', 'id'))
                    ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_testing')
                    ->label('Nama'),
                TextColumn::make('keterangan')
                    ->limit(60),
                ImageColumn::make('gambar'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListTestings::route('/'),
            'create' => Pages\CreateTesting::route('/create'),
            'view' => Pages\ViewTesting::route('/{record}'),
            'edit' => Pages\EditTesting::route('/{record}/edit'),
        ];
    }
}
