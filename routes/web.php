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