<?php

namespace App\Exports;

use App\Models\Mahasiswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class MahasiswaExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * Mengambil semua data mahasiswa
     *
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Mahasiswa::all(); // Mengambil semua data mahasiswa
    }

    /**
     * Menentukan header kolom di file Excel
     *
     * @return array
     */
    public function headings(): array
    {
        return [
            'NIM',
            'Nama',
            'Jenis Kelamin',
            'Alamat',
            'Tanggal Lahir',
            'Jurusan',
            'Tanggal Dibuat',
        ];
    }

    /**
     * Menentukan data yang akan diekspor
     *
     * @param Mahasiswa $mahasiswa
     * @return array
     */
    public function map($mahasiswa): array
    {
        return [
            $mahasiswa->nim,  // NIM mahasiswa
            $mahasiswa->nama,
            $mahasiswa->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan', // Mengonversi jenis kelamin
            $mahasiswa->alamat,
            $mahasiswa->tanggal_lahir ? $mahasiswa->tanggal_lahir->format('d/m/Y') : '',  // Format tanggal lahir jika ada
            $mahasiswa->jurusan,  // Jurusan mahasiswa
            $mahasiswa->created_at->format('d/m/Y'),  // Tanggal pembuatan
        ];
    }
}
