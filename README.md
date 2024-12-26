# **Filament CRUD untuk Dosen, Makul, dan Mahasiswa**

Proyek ini adalah aplikasi **CRUD berbasis Laravel** yang menggunakan **Filament** untuk membangun panel admin. Aplikasi ini memungkinkan pengelolaan data akademik untuk **Dosen**, **Makul** (Mata Kuliah), dan **Mahasiswa**. Dengan fitur pencarian, penyortiran, dan **export laporan ke PDF atau Excel**, proyek ini menyediakan antarmuka yang mudah digunakan untuk mengelola entitas akademik dan menghasilkan laporan.

## **Fitur**
- **Operasi CRUD**: Menambah, Membaca, Memperbarui, dan Menghapus data untuk Dosen, Makul, dan Mahasiswa.
- **Pencarian dan Penyortiran**: Kemampuan untuk mencari dan menyortir data agar pengelolaan lebih efisien.
- **Halaman Kustom dengan Export**: Halaman laporan kustom untuk data Dosen, Makul, dan Mahasiswa dengan fitur **export ke PDF dan Excel**.
- **Panel Admin Filament**: Dibangun menggunakan paket Filament untuk menciptakan antarmuka panel admin yang responsif dan kaya fitur.

## **Teknologi yang Digunakan**
- **Laravel 11**: Framework PHP untuk membangun backend.
- **Filament**: Paket panel admin untuk pengembangan backend yang cepat.
- **MySQL**: Database relasional untuk menyimpan data akademik.
- **Blade**: Mesin template untuk merender tampilan.
- **Laravel Excel**: Paket untuk mempermudah proses export data ke format Excel.
- **dompdf**: Paket untuk mempermudah proses export data ke format PDF.

## **Instalasi**
Ikuti langkah-langkah berikut untuk menginstal dan menjalankan proyek ini:

1. **Clone repositori**:
   ```bash
   git clone https://github.com/username-anda/filament-crud.git


2. **Instal dependensi**:
```bash
composer install
```

3. **Instal paket Laravel Excel dan dompdf**:
```bash
composer require maatwebsite/excel
composer require barryvdh/laravel-dompdf
```

4. **Salin file konfigurasi lingkungan**:
```bash
cp .env.example .env
```

5. **Generate aplikasi key**:
```bash
php artisan key:generate
```

6. **Jalankan migrasi untuk menyiapkan database**:
```bash
php artisan migrate
```

7. **Instal Panel Admin Filament**:
```bash
php artisan filament:install
```

8. **Jalankan server**:
```bash
php artisan serve
```
