<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.index');
});

Route::get('/desa', function () {
    return view('layouts.desa');
});

Route::get('/singledesa', function () {
    return view('layouts.singledesa');
});

Route::get('/berita', function () {
    return view('layouts.berita');
});

Route::get('/read', function () {
    return view('layouts.read');
});

Route::get('/kontak', function () {
    return view('layouts.kontak');
});

Route::get('/login', function () {
    return view('layouts.login');
});

Route::get('/register', function () {
    return view('layouts.register');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/profile', function () {
    return view('admin.profile');
});

Route::get('/fasilitas', function () {
    return view('admin.fasilitas');
});

Route::get('/atraksi', function () {
    return view('admin.atraksi');
});

Route::get('/homestay', function () {
    return view('admin.homestay');
});

Route::get('/produk', function () {
    return view('admin.produk');
});

Route::get('/kuliner', function () {
    return view('admin.kuliner');
});

Route::get('/galeri', function () {
    return view('admin.galeri');
});

Route::get('/video', function () {
    return view('admin.video');
});

Route::get('/virtual', function () {
    return view('admin.virtual');
});

Route::get('/inputBerita', function () {
    return view('admin.inpBerita');
});
