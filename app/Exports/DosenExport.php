<?php

namespace App\Exports;

use App\Models\Dosen;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class DosenExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * Mengambil semua data dosen
     *
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Dosen::all(); // Mengambil semua data dosen
    }

    /**
     * Menentukan header kolom di file Excel
     *
     * @return array
     */
    public function headings(): array
    {
        return [
            'NIDN',
            'Nama',
            'Tanggal Lahir',
            'Alamat',
            'Kode Makul',
            'Tanggal Dibuat',
        ];
    }

    /**
     * Menentukan data yang akan diekspor
     *
     * @param Dosen $dosen
     * @return array
     */
    public function map($dosen): array
    {
        return [
            $dosen->nidn,  // Menggunakan 'nidn' sebagai identifikasi
            $dosen->nama,
            $dosen->tanggal_lahir->format('d/m/Y'),  // Format tanggal lahir jika ada
            $dosen->alamat,
            $dosen->kode_makul,  // Menampilkan kode mata kuliah
            $dosen->created_at->format('d/m/Y'),  // Format tanggal pembuatan
        ];
    }
}
