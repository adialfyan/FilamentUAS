<?php

namespace App\Filament\Resources\DosenResource\Pages;

use App\Filament\Resources\DosenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions\Action;

class ListDosens extends ListRecords
{
    protected static string $resource = DosenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Action::make('print')
                ->label('Cetak PDF')
                ->color('danger')
                ->icon('heroicon-o-printer')
                ->url(fn() => route('dosen.report.pdf'), true),
            Action::make('export')
                ->label('Export Excel')
                ->color('success')
                ->icon('heroicon-o-document-arrow-down')
                ->url(fn() => route('dosen.report.excel'), true),
        ];
    }
}
