<?php

namespace App\Filament\Resources\MakulResource\Pages;

use App\Filament\Resources\MakulResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions\Action;

class ListMakuls extends ListRecords
{
    protected static string $resource = MakulResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Action::make('print')
                ->label('Cetak PDF')
                ->color('danger')
                ->icon('heroicon-o-printer')
                ->url(fn() => route('makul.report.pdf'), true),
            Action::make('export')
                ->label('Export Excel')
                ->color('success')
                ->icon('heroicon-o-document-arrow-down')
                ->url(fn() => route('makul.report.excel'), true),
        ];
    }
}
