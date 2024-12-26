<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MahasiswaResource\Pages;
use App\Models\Mahasiswa;
use Filament\Forms\Form;
use Filament\Forms\Components\{
    TextInput,
    Select,
    DatePicker,
    Section,
    Grid
};
use Filament\Resources\Resource;
use Filament\Tables\Columns\{
    TextColumn,
    BadgeColumn
};
use Filament\Tables\Table;
use Filament\Tables\Actions;
use Filament\Support\Colors;

class MahasiswaResource extends Resource
{
    protected static ?string $model = Mahasiswa::class;
    protected static ?string $navigationIcon = 'heroicon-s-academic-cap';
    protected static ?string $navigationLabel = 'Mahasiswa';
    protected static ?string $pluralModelLabel = 'Mahasiswa';
    protected static ?string $modelLabel = 'Mahasiswa';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Mahasiswa')
                    ->description('Detail informasi mahasiswa')
                    ->schema([
                        Grid::make(3)->schema([
                            TextInput::make('nama')
                                ->label('Nama Lengkap')
                                ->required()
                                ->maxLength(128)
                                ->columnSpan(1),

                            TextInput::make('nim')
                                ->label('NIM')
                                ->required()
                                ->unique(ignorable: fn($record) => $record)
                                ->maxLength(13)
                                ->columnSpan(1),

                            DatePicker::make('tanggal_lahir')
                                ->label('Tanggal Lahir')
                                ->required()
                                ->columnSpan(1),
                        ]),

                        Select::make('jenis_kelamin')
                            ->label('Jenis Kelamin')
                            ->options([
                                'L' => 'Laki-Laki',
                                'P' => 'Perempuan',
                            ])
                            ->required()
                            ->columnSpan(1),

                        Select::make('jurusan')
                            ->label('Jurusan')
                            ->options([
                                'TI' => 'Teknik Informatika',
                                'SI' => 'Sistem Informasi',
                                'ILKOM' => 'Ilmu Komunikasi',
                            ])
                            ->required(),

                        TextInput::make('alamat')
                            ->label('Alamat')
                            ->required()
                            ->maxLength(128),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nim')
                    ->label('NIM')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('nama')
                    ->label('Nama Lengkap')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'L' => 'success',
                        'P' => 'danger',
                    })
                    ->icon(fn(string $state): string => match ($state) {
                        'L' => 'heroicon-m-user',
                        'P' => 'heroicon-m-user',
                    }),

                TextColumn::make('jurusan')
                    ->label('Jurusan')
                    ->badge()
                    ->color(Colors\Color::Blue),

                TextColumn::make('tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->date()
                    ->sortable(),
            ])
            ->filters([])
            ->actions([
                Actions\EditAction::make()
                    ->color('warning'),
                Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMahasiswas::route('/'),
            'create' => Pages\CreateMahasiswa::route('/create'),
            'edit' => Pages\EditMahasiswa::route('/{record}/edit'),
        ];
    }
}
