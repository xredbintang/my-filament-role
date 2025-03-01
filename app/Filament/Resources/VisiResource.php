<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisiResource\Pages;
use App\Filament\Resources\VisiResource\RelationManagers;
use App\Models\Visi;
use App\Models\VisiMisi;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VisiResource extends Resource
{
    protected static ?string $model = VisiMisi::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';
    protected static ?string $navigationLabel = 'Visi misi dan tujuan';

    protected static ?string $navigationGroup = 'Profil Sekolah';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Visi Misi')
                ->schema([
                    RichEditor::make('tujuan')
                    ->label('Tujuan')
                    ->required(),
                    RichEditor::make('visi')
                        ->label('Visi')
                        ->required(),
                        RichEditor::make('misi')
                        ->label('Misi')
                        ->required(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('visi')->limit(20),
                TextColumn::make('misi')->limit(20),
                TextColumn::make('tujuan')->limit(20),

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
            'index' => Pages\ListVisis::route('/'),
            'create' => Pages\CreateVisi::route('/create'),
            'edit' => Pages\EditVisi::route('/{record}/edit'),
        ];
    }
}
