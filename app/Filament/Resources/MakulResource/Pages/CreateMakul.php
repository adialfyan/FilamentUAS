<?php

namespace App\Filament\Resources\MakulResource\Pages;

use App\Filament\Resources\MakulResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMakul extends CreateRecord
{
    protected static string $resource = MakulResource::class;
    // Override untuk menangani save dan redirect setelah berhasil
    protected function afterSave()
    {
        $this->notify('success', 'Mata Kuliah berhasil ditambahkan.');

        // Redirect ke halaman index setelah save
        return redirect()->route('filament.admin.resources.makuls.index');
    }
}
