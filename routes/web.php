<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $nama = 'Teguh Ganteng';
    $umur = 19;
    return view('about', compact('nama', 'umur'));
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/siswa', function () {
    return view('siswa.index');
});

Route::get('/siswa/{id}', function ($id) {
    return view('siswa.show', ['id' => $id]);
});
