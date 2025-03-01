<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KategoriBeritaResource\Pages;
use App\Filament\Resources\KategoriBeritaResource\RelationManagers;
use App\Models\KategoriBerita;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KategoriBeritaResource extends Resource
{
    protected static ?string $model = KategoriBerita::class;
    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';
    protected static ?string $navigationGroup = 'Berita';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('kategori_nama')
                            ->label('Nama Kategori')
                            ->required()
                            ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('kategori_nama')->label('Nama Kategori')->sortable()->searchable(),
                TextColumn::make('created_at')->label('Dibuat')->dateTime(),
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
            'index' => Pages\ListKategoriBeritas::route('/'),
            'create' => Pages\CreateKategoriBerita::route('/create'),
            'edit' => Pages\EditKategoriBerita::route('/{record}/edit'),
        ];
    }
}
