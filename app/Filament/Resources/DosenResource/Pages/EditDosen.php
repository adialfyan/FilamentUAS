<?php

namespace App\Filament\Resources\DosenResource\Pages;

use App\Filament\Resources\DosenResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDosen extends EditRecord
{
    protected static string $resource = DosenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    // Override untuk mengarahkan ke halaman index setelah update
    protected function getRedirectUrl(): string
    {
        return route('filament.admin.resources.dosens.index'); // Redirect ke halaman index
    }
}
