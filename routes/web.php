<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/pesan', function () {
    return view('pesan');
});
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/kategori', function () {
    return view('admin.pesanan.kategori');
});
Route::get('/tambah', function () {
    return view('admin.pesanan.tambah');
});
Route::get('/pesanan', function () {
    return view('admin.pesanan.index');
});
Route::get('/login', function () {
    return view('login');
});