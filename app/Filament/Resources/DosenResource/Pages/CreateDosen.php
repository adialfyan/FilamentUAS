<?php

namespace App\Filament\Resources\DosenResource\Pages;

use App\Filament\Resources\DosenResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDosen extends CreateRecord
{
    protected static string $resource = DosenResource::class;
    protected function afterSave()
    {
        $this->notify('success', 'Data Dosen berhasil ditambahkan.');

        // Redirect ke halaman index setelah save
        return redirect()->route('filament.admin.resources.dosens.index');
    }
}
