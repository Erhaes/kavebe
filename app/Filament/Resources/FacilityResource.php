<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use App\Models\Facility;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\FacilityResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FacilityResource\RelationManagers;
use App\Models\Lab;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;

class FacilityResource extends Resource
{
    protected static ?string $model = Facility::class;

    protected static ?string $navigationGroup = 'Fasilitas';

    protected static ?string $navigationLabel = 'Ruang Lab';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_lab')
                    ->columnSpanFull()
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                TextInput::make('slug'),
                RichEditor::make('keterangan')
                    ->columnSpanFull()
                    ->required(),
                SpatieMediaLibraryFileUpload::make('foto')
                    ->image()
                    ->collection('foto_fasilitas')
                    ->maxSize(3072)
                    ->preserveFilenames()
                    ->enableDownload()
                    ->enableOpen()
                    ->deleteUploadedFileUsing(null),
                Select::make('lab_id')
                    // ->options(Lab::all()->pluck('nama', 'id'))
                    ->relationship(name:'lab',titleAttribute:'nama',ignoreRecord:true)
                    ->preload()
                    ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_lab')
                    ->label('Nama Ruang'),
                SpatieMediaLibraryImageColumn::make('foto')
                    ->collection('foto_fasilitas'),
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
            'index' => Pages\ListFacilities::route('/'),
            'create' => Pages\CreateFacility::route('/create'),
            'view' => Pages\ViewFacility::route('/{record}'),
            'edit' => Pages\EditFacility::route('/{record}/edit'),
        ];
    }
}
