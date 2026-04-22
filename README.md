# 🛒 Web Produk Laravel

Project ini merupakan aplikasi web sederhana berbasis **Laravel Framework** yang digunakan untuk mengelola data produk. Aplikasi ini dibuat sebagai implementasi konsep CRUD (Create, Read, Update, Delete) menggunakan teknologi Laravel, PHP, dan MySQL.

Sistem ini berfokus pada pengelolaan data produk seperti menambahkan produk baru, menampilkan daftar produk, mengedit informasi produk, hingga menghapus data produk yang sudah tidak digunakan. Project ini dibuat sebagai latihan dalam memahami konsep dasar backend development dan pengelolaan database pada aplikasi web modern.

---

## 📌 Deskripsi Sistem

Aplikasi Web Produk ini memiliki fungsi utama sebagai sistem manajemen data produk. Setiap produk yang dimasukkan ke dalam sistem akan disimpan di dalam database MySQL, kemudian ditampilkan melalui halaman web menggunakan Laravel sebagai backend framework.

Pengguna dapat melakukan beberapa aktivitas utama seperti:
- Menambahkan data produk baru ke dalam sistem
- Melihat daftar seluruh produk yang tersedia
- Mengedit informasi produk jika terjadi perubahan data
- Menghapus produk yang sudah tidak diperlukan

Dengan adanya sistem ini, proses pengelolaan data menjadi lebih cepat, terstruktur, dan tidak lagi dilakukan secara manual.

---

## 🚀 Fitur Utama

- 📦 Menampilkan daftar produk dari database
- ➕ Menambahkan data produk baru
- ✏️ Mengubah / mengedit data produk
- ❌ Menghapus data produk
- 🔍 Melihat detail informasi produk
- 💾 Integrasi dengan database MySQL

---

## 🛠️ Teknologi yang Digunakan

- Laravel Framework (PHP)
- PHP Native (backend logic)
- MySQL / MariaDB (database)
- Blade Template Engine (view Laravel)
- Bootstrap (opsional untuk tampilan UI)
- Git & GitHub (version control)

---

## ⚙️ Cara Instalasi Project

Berikut langkah-langkah untuk menjalankan project ini di lokal:

### 1. Clone Repository
```bash
git clone https://github.com/username/nama-repo.git

# **INSTALL LARAVEL PROJECT**

# Masuk folder project
cd nama-repo

# Install dependency Laravel
composer install

# Setup environment file
cp .env.example .env

# **KONFIGURASI DATABASE**
# Edit file .env:
# DB_DATABASE=nama_database
# DB_USERNAME=root
# DB_PASSWORD=

# Generate key aplikasi
php artisan key:generate

# Migrasi database
php artisan migrate

# Jalankan server Laravel
php artisan serve

# Akses aplikasi
# http://127.0.0.1:8000
