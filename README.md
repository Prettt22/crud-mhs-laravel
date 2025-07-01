# 🎓 Aplikasi Manajemen Data Mahasiswa

Ini adalah aplikasi web sederhana berbasis Laravel untuk mengelola data mahasiswa, termasuk fitur:
- Menambah data (Create)
- Melihat data (Read)
- Mengedit data (Update)
- Menghapus data (Delete)

---

## 🚀 Fitur Utama
- Manajemen data mahasiswa (NIM, nama, tanggal lahir, program studi, dll)
- Validasi form input
- Tampilan sederhana dengan CSS manual
- Struktur kode rapi menggunakan MVC Laravel

---

## 📦 Instalasi

1. **Clone repository**
```bash
git clone https://github.com/Prettt22/crud-mhs-laravel.git
cd acadex
```

2. **Install dependency**
```bash
composer install
npm install
```

3. **Salin file environment dan generate key**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Atur koneksi database** di file `.env`:
```dotenv
DB_DATABASE=kelola_mahasiswa
DB_USERNAME=root
DB_PASSWORD=
```

5. **Migrasi database**
```bash
php artisan migrate
```

6. **Jalankan server**
```bash
php artisan serve
```

---

## 🛠 Teknologi yang Digunakan
- Laravel 12
- PHP 8.4
- MySQL
- CSS manual (tanpa framework)

---

> Dibuat dengan oleh M Prasetya Nugroho — untuk latihan Laravel dan tugas kuliah pengelolaan data mahasiswa.
