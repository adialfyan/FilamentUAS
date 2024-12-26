<?php

namespace App\Filament\Widgets;

use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\Makul;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class LaporanWidget extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Jumlah Mahasiswa', Mahasiswa::count())
                ->description('Total Mahasiswa yang terdaftar')
                ->icon('heroicon-o-users')
                ->color('primary'),
            
            Card::make('Jumlah Dosen', Dosen::count())
                ->description('Total Dosen yang terdaftar')
                ->icon('heroicon-o-user-group')
                ->color('success'),
            
            Card::make('Jumlah Makul', Makul::count())
                ->description('Total Mata Kuliah yang terdaftar')
                ->icon('heroicon-o-book-open')
                ->color('warning'),
        ];
    }
    
}
