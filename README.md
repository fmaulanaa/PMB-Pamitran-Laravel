# PMB-Pamitran-Laravel
Tentu, ini adalah versi Bahasa Indonesia yang lengkap dan formal untuk repositori GitHub Anda, mencakup deskripsi proyek dan panduan instalasi.

Sistem Penerimaan Mahasiswa Baru (SPMB) - Laravel + Vite.js
Repositori ini berisi Sistem Seleksi Penerimaan Mahasiswa Baru (SPMB) berbasis web yang dikembangkan menggunakan framework Laravel dan Vite.js untuk pengalaman frontend yang modern dan berperforma tinggi. Proyek ini dirancang sebagai implementasi praktis dari pengembangan web tingkat lanjut dan penjaminan mutu perangkat lunak yang sistematis.

Deskripsi Proyek
Aplikasi ini mengelola seluruh proses rekrutmen mahasiswa, mulai dari pendaftaran kandidat dan pengunggahan dokumen hingga pengumuman hasil seleksi. Fokus utama dari repositori ini adalah mendemonstrasikan integrasi antara pengalaman pengembang yang cepat (melalui Vite) dengan arsitektur backend yang tangguh (Laravel), sembari memastikan keandalan sistem

Fitur Utama
Frontend Modern: Pemrosesan aset yang sangat cepat dan optimasi bundling melalui Vite.js.
Backend Aman: Dibangun di atas Laravel untuk memastikan penanganan data, autentikasi, dan struktur RESTful API yang aman.
Penjaminan Mutu (QA): Diuji menggunakan teknik Blackbox Testing (seperti Boundary Value Analysis dan Equivalence Partitioning) untuk memastikan seluruh kebutuhan fungsional memenuhi standar akademis maupun industri.
UI Responsif: Dirancang untuk memberikan pengalaman yang intuitif bagi calon mahasiswa di berbagai perangkat.
Teknologi yang Digunakan
Framework: Laravel 10/11
Build Tool: Vite.js
Database: MySQL / PostgreSQL
Metode Pengujian: Functional Blackbox Testing

🚀 Panduan Instalasi
Ikuti langkah-langkah berikut untuk menjalankan proyek ini di perangkat lokal Anda:

Prasyarat
Sebelum memulai, pastikan Anda telah menginstal:
PHP (>= 8.1)
Composer
Node.js & NPM
MySQL atau database pilihan lainnya


Langkah-langkah Setup
Clone Repositori
Bash
git clone https://github.com/fmaulanaa/PMB-Pamitran-Laravel.git
cd nama-proyek
Instal Dependensi PHP

Bash
composer install
Instal Dependensi Frontend

Bas
npm install
Konfigurasi Environment
Salin file contoh environment dan sesuaikan pengaturan database Anda:

Bash
cp .env.example .env
Buka file .env dan perbarui kolom DB_DATABASE, DB_USERNAME, dan DB_PASSWORD sesuai dengan setup lokal Anda.
Generate Application Key

Bash
php artisan key:generate
Jalankan Migrasi Database
(Opsional: Tambahkan --seed jika Anda memiliki data dummy)

Bash
php artisan migrate
Jalankan Aplikasi
Anda perlu membuka dua tab terminal:
Tab 1 (Backend): php artisan serve
Tab 2 (Frontend/Vite): npm run dev

Akses Aplikasi
Buka browser Anda dan akses http://localhost:8000.









