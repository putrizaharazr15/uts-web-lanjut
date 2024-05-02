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
    return view('welcome');
});

Route::get('/home', function()
{
    return view('index');
})->name('index');

Route::get('/produk', function()
{
    $data = [
        ["kode_produk" => "BRG001", "nama_produk" => "Pena", "jenis_produk" => "alat tulis", "harga_produk" => "20000"],
        ["kode_produk" => "BRG001", "nama_produk" => "Pena", "jenis_produk" => "alat tulis", "harga_produk" => "20000"]
    ];

    return view('produk', compact('data'));
})->name('show');

Route::get('/create', function()
{

    $data = ["Alat tulis", "Elektronik", "Sembako"];

    return view('create', compact('data'));
})->name('create');