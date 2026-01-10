<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['data' => 'Home Page']);
});

Route::get('/about', function () {
    $nama = 'Teguh Ganteng';
    $umur = 7;
    return view('about', compact('nama', 'umur'), ['data' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['data' => 'Contact']);
});

Route::get('/siswa', function () {
    $var = [
        ['nama' => 'Teguh Surya', 'nilai' => 80, 'id' => 001],
        ['nama' => 'Amelia Safitri', 'nilai' => 97, 'id' => 002],
        ['nama' => 'Tea', 'nilai' => 89, 'id' => 002]
    ];
    return view('siswa.index', compact('var'), ['data' => 'Siswa']);
});

Route::get('/siswa/{id}', function ($id) {
    return view('siswa.show', ['id' => $id], ['data' => 'Detail Siswa']);
});
