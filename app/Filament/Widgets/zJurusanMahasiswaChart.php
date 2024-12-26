<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Mahasiswa;

class zJurusanMahasiswaChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        return [
            'labels' => ['TI', 'SI', 'ILKOM'],
            'datasets' => [
                [
                    'label' => 'Jumlah Mahasiswa',
                    'data' => [
                        Mahasiswa::where('jurusan', 'TI')->count(),
                        Mahasiswa::where('jurusan', 'SI')->count(),
                        Mahasiswa::where('jurusan', 'ILKOM')->count(),
                    ],
                    'backgroundColor' => ['#f87171', '#34d399', '#60a5fa'],
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
