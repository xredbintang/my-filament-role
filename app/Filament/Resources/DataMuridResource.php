<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DataMuridResource\Pages;
use App\Filament\Resources\DataMuridResource\RelationManagers;
use App\Models\DataMurid;
use App\Models\DataSiswa;
use App\Models\Guru;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DataMuridResource extends Resource
{
    protected static ?string $model = DataMurid::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-duplicate';
    protected static ?string $navigationLabel = 'Data Murid Pdf';
    protected static ?string $navigationGroup = 'Data Murid';
    protected static ?int $navigationSort = 13;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Data murid PDF')
                ->schema([
                    TextInput::make('data_kelas')->required(),
                    FileUpload::make('data_files')->required()->directory('data_pdf')
                    ->multiple()->acceptedFileTypes(['application/pdf']),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('data_kelas')->searchable()->sortable()
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
            'index' => Pages\ListDataMurids::route('/'),
            'create' => Pages\CreateDataMurid::route('/create'),
            'edit' => Pages\EditDataMurid::route('/{record}/edit'),
        ];
    }
}
