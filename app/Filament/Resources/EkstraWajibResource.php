<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EkstraWajibResource\Pages;
use App\Filament\Resources\EkstraWajibResource\RelationManagers;
use App\Models\EkstraWajib;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EkstraWajibResource extends Resource
{
    protected static ?string $model = EkstraWajib::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';
    protected static ?string $navigationLabel = 'Ekstra Wajib';
    protected static ?string $navigationGroup = 'Ekstrakulikuler';
    protected static ?int $navigationSort = 9;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Esktrakulikuler Wajib')
                ->schema([
                    TextInput::make('ekstra_judul')->required(),
                    TextInput::make('ekstra_nama')->required(),
                    FileUpload::make('ekstra_gambar')->required()->image()->directory('ekstra_img'),
                    Textarea::make('ekstra_deskripsi')->required(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('ekstra_judul')->sortable()->searchable(),
                TextColumn::make('ekstra_nama')->sortable()->searchable(),
                ImageColumn::make('ekstra_gambar'),
                TextColumn::make('ekstra_deskripsi')->sortable()->searchable()->limit(20),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListEkstraWajibs::route('/'),
            'create' => Pages\CreateEkstraWajib::route('/create'),
            'edit' => Pages\EditEkstraWajib::route('/{record}/edit'),
        ];
    }
}
