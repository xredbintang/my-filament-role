<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeritaResource\Pages;
use App\Filament\Resources\BeritaResource\RelationManagers;
use App\Models\Berita;
use App\Models\KategoriBerita;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;
    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';
    protected static ?string $navigationGroup = 'Berita';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Berita')
                    ->schema([
                        TextInput::make('berita_judul')
                            ->label('Judul Berita')
                            ->required()
                            ->maxLength(255),
                        Select::make('berita_kategori')
                            ->label('Kategori Berita')
                            ->options(KategoriBerita::all()->pluck('kategori_nama', 'id'))
                            ->searchable()
                            ->required(),
                        DatePicker::make('berita_tanggal')
                            ->label('Tanggal Berita')
                            ->required(),
                        FileUpload::make('berita_gambar')
                            ->label('Gambar Berita')
                            ->image()
                            ->directory('news_img')
                            ->required(),
                        Textarea::make('berita_deskripsi')
                            ->label('Deskripsi Berita')
                            ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('berita_judul')->label('Judul')->sortable()->searchable(),
                TextColumn::make('kategori.nama')->label('Kategori')->sortable()->searchable(),
                TextColumn::make('berita_tanggal')->label('Tanggal')->dateTime(),
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
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }
}
