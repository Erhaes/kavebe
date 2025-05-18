<?php

namespace App\Filament\Resources;

use App\Models\Lab;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\LabResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\LabResource\RelationManagers;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;

class LabResource extends Resource
{
    protected static ?string $model = Lab::class;

    protected static ?string $navigationGroup = 'Deskripsi Lab';

    protected static ?string $navigationLabel = 'Tabel Lab';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->columnSpanFull()
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                TextInput::make('slug'),
                RichEditor::make('keterangan')
                    ->columnSpanFull()
                    ->required(),
                SpatieMediaLibraryFileUpload::make('foto')
                    ->collection('foto_lab')
                    ->image()
                    ->preserveFilenames()
                    ->maxSize(3072),
                SpatieMediaLibraryFileUpload::make('video')
                    ->collection('videolab')
                    ->preserveFilenames()
                    ->maxSize(10240)
                    ->acceptedFileTypes([
                        'video/mp4', 
                        'video/x-msvideo', // AVI
                        'video/quicktime', // MOV
                        'video/webm', 
                        'video/mpeg'
                    ]),
                RichEditor::make('visi')
                    ->columnSpanFull()
                    ->required(),
                RichEditor::make('misi')
                    ->columnSpanFull()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Nama Lab'),
                TextColumn::make('keterangan')
                    ->label('Deskripsi Lab')
                    ->limit(60),
                SpatieMediaLibraryImageColumn::make('foto')
                    ->collection('foto_lab')
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
            'index' => Pages\ListLabs::route('/'),
            'create' => Pages\CreateLab::route('/create'),
            'view' => Pages\ViewLab::route('/{record}'),
            'edit' => Pages\EditLab::route('/{record}/edit'),
        ];
    }
}
