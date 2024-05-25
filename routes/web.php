<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswacontroller;
use App\Http\Controllers\prodicontroller;


Route::get('/', function () {
    $data = ['nama' => 'hitler', 'foto' =>'opp.jpeg'];
    return view('dashboard', compact ('data')); 
});

Route::get('/mahasiswa', function () {
    $data = ['nama' => 'hitler', 'foto' =>'opp.jpeg'];
    return view('mahasiswa', compact ('data')); 
});

Route::get('/prodi', function () {
    $data = ['nama' => 'hitler', 'foto' =>'opp.jpeg'];
    return view('prodi', compact ('data')); 
});



Route::get('mahasiswa', 'App\Http\Controllers\mahasiswacontroller@index');
Route::get('prodi', 'App\Http\Controllers\prodicontroller@index');

Route::get('/data', [mahasiswacontroller::class, 'index']);
Route::get('/data/{id}', [mahasiswacontroller::class, 'show']);

Route::get('/data', [prodicontroller::class, 'index']);
Route::get('/data/{id}', [prodicontroller::class, 'show']);