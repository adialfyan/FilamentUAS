<?php

namespace App\Filament\Resources\MahasiswaResource\Pages;

use App\Filament\Resources\MahasiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMahasiswa extends CreateRecord
{
    protected static string $resource = MahasiswaResource::class;
    protected function afterSave()
    {
        $this->notify('success', 'Data Mahasiswa berhasil ditambahkan.');

        // Redirect ke halaman index setelah save
        return redirect()->route('filament.admin.resources.mahasiswas.index');
    }
}
