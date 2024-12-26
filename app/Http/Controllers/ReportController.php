<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Makul;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DosenExport;
use App\Exports\MakulExport;
use App\Exports\MahasiswaExport;

class ReportController extends Controller
{
    //dosen
    public function dosenPdf()
    {
        $dosens = Dosen::all();
        $pdf = Pdf::loadView('reports.dosen-pdf', compact('dosens'));
        return $pdf->stream('laporan-dosen.pdf');
    }

    public function dosenExcel()
    {
        return Excel::download(new DosenExport, 'laporan-dosen.xlsx');
    }

    //makul
    public function makulPdf()
    {
        $makuls = Makul::all();
        $pdf = Pdf::loadView('reports.makul-pdf', compact('makuls'));
        return $pdf->stream('laporan-makul.pdf');
    }

    public function makulExcel()
    {
        return Excel::download(new MakulExport, 'laporan-makul.xlsx');
    }

    //mahasiswa
    public function mahasiswaPdf()
    {
        $mahasiswas = Mahasiswa::all();
        $pdf = Pdf::loadView('reports.mahasiswa-pdf', compact('mahasiswas'));
        return $pdf->stream('laporan-mahasiswa.pdf');
    }

    public function mahasiswaExcel()
    {
        return Excel::download(new MahasiswaExport, 'laporan-mahasiwa.xlsx');
    }
}
