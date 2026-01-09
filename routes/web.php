<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $nama = 'Teguh Ganteng';
    $umur = 7;
    return view('about', compact('nama', 'umur'));
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/siswa', function () {
    $data = [
        ['nama' => 'Budi', 'nilai' => 80, 'id' => 001],
        ['nama' => 'Intan', 'nilai' => 97, 'id' => 002],
        ['nama' => 'Citra', 'nilai' => 89, 'id' => 002]
    ];
    return view('siswa.index', compact('data'));
});

Route::get('/siswa/{id}', function ($id) {
    return view('siswa.show', ['id' => $id]);
});
