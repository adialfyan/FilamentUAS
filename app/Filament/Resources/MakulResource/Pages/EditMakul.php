<?php

namespace App\Filament\Resources\MakulResource\Pages;

use App\Filament\Resources\MakulResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Actions;

class EditMakul extends EditRecord
{
    protected static string $resource = MakulResource::class;
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    // Override untuk mengarahkan ke halaman index setelah update
    protected function getRedirectUrl(): string
    {
        return route('filament.admin.resources.makuls.index'); // Redirect ke halaman index
    }
}

