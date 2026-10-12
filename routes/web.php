<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// ---------------------------------------------------------------
// 3 route custom (Requirement 4 & 5): data dinamis berupa array
// dikirim dari route ke view Blade.
// ---------------------------------------------------------------

Route::get('/', function () {
    return view('home', [
        'nama'    => 'Samuel Jacksen Brahmana',
        'status'  => 'Mahasiswa Ilmu Komputer, UNIMED',
        'courses' => ['HTML', 'CSS', 'SCSS', 'JavaScript', 'PHP', 'Laravel'],
    ]);
})->name('home');

Route::get('/about', function () {
    return view('about', [
        'profil' => [
            'Nama'     => 'Samuel Jacksen Brahmana',
            'Kampus'   => 'Universitas Negeri Medan',
            'Domisili' => 'Medan',
            'Asal'     => 'Kabanjahe',
        ],
        'minat' => ['Menggambar sketsa', 'Desain grafis', 'Pemrograman web'],
    ]);
})->name('about');

Route::get('/contact', function () {
    return view('contact', [
        'kontak' => [
            ['label' => 'Email',     'nilai' => 'samueljacksen63@email.com'],
            ['label' => 'Instagram', 'nilai' => '@samuelbrhm'],
            ['label' => 'GitHub',    'nilai' => 'jacksenbrhm'],
        ],
    ]);
})->name('contact');

// ---------------------------------------------------------------
// BONUS: route dengan parameter  ->  /hello/{nama}
// ---------------------------------------------------------------
Route::get('/hello/{nama}', function (string $nama) {
    return view('hello', ['nama' => $nama]);
})->where('nama', '[A-Za-z ]+')->name('hello');

// ---------------------------------------------------------------
// MVC (Requirement 6): Route -> Controller -> Model -> View
// ---------------------------------------------------------------
Route::get('/produk', [ProductController::class, 'index'])->name('produk.index');

// Halaman welcome bawaan Laravel tetap bisa dibuka di /welcome
Route::get('/welcome', function () {
    return view('welcome');
});
