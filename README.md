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

### 2
cd nama-repo
3. Install Dependency Laravel
### composer install
4. Setup File Environment

Copy file .env.example menjadi .env

cp .env.example .env
5. Konfigurasi Database

Atur bagian database di file .env sesuai dengan database lokal kamu:

DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
6. Generate Key Aplikasi
php artisan key:generate
7. Migrasi Database
php artisan migrate
8. Jalankan Server Laravel
php artisan serve

Aplikasi akan berjalan di:

http://127.0.0.1:8000
🗄️ Struktur Tabel Produk

Tabel produk digunakan untuk menyimpan semua data barang yang ada di sistem.

Field	Tipe Data	Keterangan
id	bigint	Primary key
nama_produk	string	Nama produk
harga	integer	Harga produk
stok	integer	Jumlah stok
deskripsi	text	Penjelasan produk
created_at	timestamp	Waktu dibuat
updated_at	timestamp	Waktu update
🎯 Tujuan Project

Project ini dibuat untuk tujuan pembelajaran, yaitu:

Memahami konsep CRUD dalam Laravel
Belajar cara kerja MVC (Model, View, Controller)
Menghubungkan Laravel dengan database MySQL
Melatih kemampuan backend development dasar
Membiasakan penggunaan Git & GitHub dalam project

Dengan project ini, diharapkan dapat memahami alur kerja sistem web dari input data, penyimpanan ke database, hingga menampilkan data ke user.
