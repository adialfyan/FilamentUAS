<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa/report/pdf', [ReportController::class, 'mahasiswaPdf'])->name('mahasiswa.report.pdf');
Route::get('/mahasiswa/report/excel', [ReportController::class, 'mahasiswaExcel'])->name('mahasiswa.report.excel');
Route::get('/dosen/report/pdf', [ReportController::class, 'dosenPdf'])->name('dosen.report.pdf');
Route::get('/dosen/report/excel', [ReportController::class, 'dosenExcel'])->name('dosen.report.excel');
Route::get('/makul/report/pdf', [ReportController::class, 'makulPdf'])->name('makul.report.pdf');
Route::get('/makul/report/excel', [ReportController::class, 'makulExcel'])->name('makul.report.excel');