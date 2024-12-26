<?php

namespace App\Filament\Resources\MahasiswaResource\Pages;

use App\Filament\Resources\MahasiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions\Action;

class ListMahasiswas extends ListRecords
{
    protected static string $resource = MahasiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Action::make('print')
                ->label('Cetak PDF')
                ->color('danger')
                ->icon('heroicon-o-printer')
                ->url(fn() => route('mahasiswa.report.pdf'), true),
            Action::make('export')
                ->label('Export Excel')
                ->color('success')
                ->icon('heroicon-o-document-arrow-down')
                ->url(fn() => route('mahasiswa.report.excel'), true),
        ];
    }
}