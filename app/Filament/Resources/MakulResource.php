<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MakulResource\Pages;
use App\Models\Makul;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\NumberInput;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Resources\Resource;

class MakulResource extends Resource
{
    protected static ?string $model = Makul::class;

    protected static ?string $navigationIcon = 'heroicon-s-book-open';

    protected static ?string $navigationLabel = 'Mata Kuliah';
    protected static ?string $pluralModelLabel = 'Mata Kuliah';
    protected static ?string $modelLabel = 'Mata Kuliah';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('kode_makul')
                    ->label('Kode Mata Kuliah')
                    ->required()
                    ->unique(ignoreRecord: true),

                TextInput::make('nama_makul')
                    ->label('Nama Mata Kuliah')
                    ->required(),

                TextInput::make('sks')
                    ->label('Jumlah SKS')
                    ->required()
                    ->numeric() // Ini memastikan input berupa angka
                    ->minValue(1)
                    ->maxValue(8),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('rowIndex')
                    ->label('No')
                    ->rowIndex()
                    ->sortable(),

                TextColumn::make('kode_makul')
                    ->label('Kode Mata Kuliah')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('nama_makul')
                    ->label('Nama Mata Kuliah')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('sks')
                    ->label('SKS')
                    ->sortable(),

                TextColumn::make('dosens_count')
                    ->label('Jumlah Dosen')
                    ->counts('dosens'),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make()
                ->color('warning'),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }



    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMakuls::route('/'),
            'create' => Pages\CreateMakul::route('/create'),
            'edit' => Pages\EditMakul::route('/{record}/edit'),
        ];
    }
}
