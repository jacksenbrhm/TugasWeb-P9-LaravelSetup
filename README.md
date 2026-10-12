# TugasWeb-P9-LaravelSetup

**Tugas Rutin 9: Setup Laravel**
Nama: Samuel Jacksen Brahmana | Pemrograman Web, UNIMED

Proyek Laravel pertama: instalasi, koneksi MySQL, 3 route custom dengan Blade view, serta contoh alur MVC (route, controller, model, view).

## Screenshot

### Welcome page bawaan Laravel (`php artisan serve`)
![Welcome page](screenshots/welcome.png)

### Halaman custom
| Halaman | Screenshot |
|---|---|
| `/` (Home) | ![Home](screenshots/home.png) |
| `/about` | ![About](screenshots/about.png) |
| `/contact` | ![Contact](screenshots/contact.png) |
| `/hello/Samuel` (bonus) | ![Hello](screenshots/hello.png) |
| `/produk` (MVC) | ![Produk](screenshots/produk.png) |

## Langkah Install (dari nol)

Prasyarat: PHP 8.2 (XAMPP), Composer, dan MySQL aktif. Proyek ini memakai Laravel 12 (Laravel 13 membutuhkan PHP 8.3 atau lebih baru).

```bash
php -v
composer -V
```

1. **Buat project**
   ```bash
   composer create-project laravel/laravel:^12.0 TugasWeb-P9-LaravelSetup
   cd TugasWeb-P9-LaravelSetup
   ```
2. **Buat database** di phpMyAdmin (`http://localhost/phpmyadmin`): database `laravel_setup`, collation `utf8mb4_unicode_ci`.
3. **Konfigurasi `.env`** (hapus tanda `#` di depan baris DB):
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=laravel_setup
   DB_USERNAME=root
   DB_PASSWORD=
   ```
4. **Migrasi tabel**
   ```bash
   php artisan migrate
   ```
5. **Jalankan server**
   ```bash
   php artisan serve
   ```
   Buka `http://127.0.0.1:8000`.

## Menjalankan dari Repo Ini (clone)

```bash
git clone https://github.com/jacksenbrhm/TugasWeb-P9-LaravelSetup.git
cd TugasWeb-P9-LaravelSetup
composer install
cp .env.example .env          # Windows CMD: copy .env.example .env
php artisan key:generate
# sesuaikan DB_* di .env, lalu:
php artisan migrate
php artisan serve
```

## Daftar Route

| URL | Keterangan | Sumber data |
|---|---|---|
| `/` | Halaman Home | Array dari route |
| `/about` | Halaman About | Array dari route |
| `/contact` | Halaman Contact | Array dari route |
| `/hello/{nama}` | Bonus: route berparameter | Parameter URL |
| `/produk` | Contoh MVC | Database lewat `ProductController` dan model `Product` |
| `/welcome` | Welcome bawaan Laravel | - |

## Perintah Artisan yang Dipakai

```bash
php artisan make:controller ProductController   # app/Http/Controllers/ProductController.php
php artisan make:model Product -m               # app/Models/Product.php + migration create_products_table
php artisan migrate
php artisan route:list
```

## Struktur Folder

| Folder / File | Fungsi |
|---|---|
| `app/Http/Controllers/` | Controller: menerima request dan menyiapkan data untuk view |
| `app/Models/` | Model Eloquent: representasi tabel database |
| `bootstrap/` | Proses booting aplikasi (`app.php`) dan cache framework |
| `config/` | File konfigurasi (database, app, session, dll.) |
| `database/migrations/` | Skema tabel yang bisa dijalankan dengan `php artisan migrate` |
| `database/seeders/` dan `factories/` | Pengisi data awal dan data dummy |
| `public/` | Titik masuk web (`index.php`), aset publik |
| `resources/views/` | Template Blade (tampilan) |
| `routes/web.php` | Daftar route untuk halaman web |
| `storage/` | Log, cache, dan file upload |
| `tests/` | Pengujian otomatis |
| `vendor/` | Library hasil Composer (tidak di-commit) |
| `.env` | Konfigurasi rahasia/lingkungan (tidak di-commit) |
| `artisan` | CLI Laravel |
| `composer.json` / `composer.lock` | Daftar dan versi pasti dependensi |

## Requirements

- [x] Install Composer dan buat project (`composer create-project`)
- [x] Buat database di phpMyAdmin dan konfigurasi `.env` (mysql)
- [x] `php artisan serve` berjalan, screenshot welcome page
- [x] 3 route custom (`/`, `/about`, `/contact`) mengembalikan Blade view
- [x] View menampilkan data dinamis (array dari route)
- [x] Memakai `make:controller` dan `make:model -m`
- [x] README: langkah install dan penjelasan struktur folder
- [x] Bonus: Tailwind CDN dan route parameter `/hello/{nama}`
