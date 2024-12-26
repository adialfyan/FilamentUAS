<?php

namespace App\Exports;

use App\Models\Makul;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class MakulExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * Mengambil semua data makul
     *
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Makul::all(); // Mengambil semua data makul
    }

    /**
     * Menentukan header kolom di file Excel
     *
     * @return array
     */
    public function headings(): array
    {
        return [
            'Kode Makul',
            'Nama Makul',
            'SKS',
            'Tanggal Dibuat',
        ];
    }

    /**
     * Menentukan data yang akan diekspor
     *
     * @param Makul $makul
     * @return array
     */
    public function map($makul): array
    {
        return [
            $makul->kode_makul,  // Kode mata kuliah
            $makul->nama_makul,  // Nama mata kuliah
            $makul->sks,         // SKS mata kuliah
        ];
    }
}
