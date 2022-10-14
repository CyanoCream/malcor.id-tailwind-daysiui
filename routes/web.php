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
    return view('welcome');
});

Route::get('/portofolio', function () {
    return view('portofolio.index');
});

Route::get('/tips', function () {
    return view('pelanggan.index');
});

Route::get('/about', function () {
    return view('about.index');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//route admin
Route::get('/admin', 'App\Http\Controllers\PesananController@index' )->name('admin')->middleware('auth');
Route::post('/create', 'App\Http\Controllers\PesananController@store' )->name('create.pesanan')->middleware('auth');
Route::post('/update/{pesanan}', 'App\Http\Controllers\PesananController@update' )->name('update.pesanan')->middleware('auth');
Route::get('/admin/pesanan', 'App\Http\Controllers\PesananController@index' )->middleware('auth');
Route::get('/admin/testimoni', 'App\Http\Controllers\TestimoniController@index' )->name('admin.testimoni')->middleware('auth');
Route::get('/admin/news', 'App\Http\Controllers\NewsController@index' )->name('admin.news')->middleware('auth');
Route::get('/admin/portofolio', 'App\Http\Controllers\PortofolioController@index' )->name('admin.portofolio')->middleware('auth');
Route::get('/admin/layanan', 'App\Http\Controllers\LayananController@index' )->name('admin.layanan')->middleware('auth');

//route admin create
Route::post('/create', 'App\Http\Controllers\PesananController@store' )->name('create.pesanan')->middleware('auth');
Route::post('/update/{pesanan}', 'App\Http\Controllers\PesananController@update' )->name('update.pesanan')->middleware('auth');
require __DIR__.'/auth.php';
