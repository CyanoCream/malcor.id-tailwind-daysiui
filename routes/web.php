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

// Route::get('/', function () {
//     return view('welcome');
// });

//view user
Route::get('/', 'App\Http\Controllers\LayananController@view' )->name('home');
Route::get('/portofolio', 'App\Http\Controllers\PortofolioController@view' );
Route::get('/tips', 'App\Http\Controllers\NewsController@view' );






Route::get('/about', function () {
    return view('about.index');
});

Route::get('/admin', function () {
    return view('admin.index');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::post('/pesan', 'App\Http\Controllers\PesananController@buat' )->name('buat.pesanan');

//rooute view data user
Route::get('/user/pesanan', 'App\Http\Controllers\PesananController@view' )->name('user.pesanan');
Route::get('/user/testimoni', 'App\Http\Controllers\TestimoniController@view' )->name('user.testimoni');
Route::get('/user/news', 'App\Http\Controllers\NewsController@view' )->name('user.news');
Route::get('/user/portofolio', 'App\Http\Controllers\PortofolioController@view' )->name('user.portofolio');
Route::get('/user/layanan', 'App\Http\Controllers\LayananController@view' )->name('user.layanan');

//route admin
Route::get('/admin', 'App\Http\Controllers\PesananController@index' )->name('admin')->middleware('auth');
Route::get('/admin/pesanan', 'App\Http\Controllers\PesananController@index' )->name('admin.pesanan')->middleware('auth');
Route::get('/admin/testimoni', 'App\Http\Controllers\TestimoniController@index' )->name('admin.testimoni')->middleware('auth');
Route::get('/admin/news', 'App\Http\Controllers\NewsController@index' )->name('admin.news')->middleware('auth');
Route::get('/admin/portofolio', 'App\Http\Controllers\PortofolioController@index' )->name('admin.portofolio')->middleware('auth');
Route::get('/admin/layanan', 'App\Http\Controllers\LayananController@index' )->name('admin.layanan')->middleware('auth');

//route admin create
Route::post('/create', 'App\Http\Controllers\PesananController@store' )->name('create.pesanan')->middleware('auth');
Route::post('/admin/layanan/create', 'App\Http\Controllers\LayananController@store' )->name('create.layanan')->middleware('auth');
Route::post('/admin/news/create', 'App\Http\Controllers\NewsController@store' )->name('create.news')->middleware('auth');
Route::post('/admin/portofolio/create', 'App\Http\Controllers\PortofolioController@store' )->name('create.portofolio')->middleware('auth');
Route::post('/admin/testimoni/create', 'App\Http\Controllers\TestimoniController@store' )->name('create.testimoni')->middleware('auth');


//route admin update
Route::post('/update/{pesanan}', 'App\Http\Controllers\PesananController@update' )->name('update.pesanan')->middleware('auth');
Route::post('/admin/update/layanan/{layanan}', 'App\Http\Controllers\LayananController@update' )->name('update.layanan')->middleware('auth');
Route::post('/admin/update/news/{news}', 'App\Http\Controllers\NewsController@update' )->name('update.news')->middleware('auth');
Route::post('/admin/update/portofolio/{portofolio}', 'App\Http\Controllers\PortofolioController@update' )->name('update.portofolio')->middleware('auth');
Route::post('/admin/update/testimoni/{testimoni}', 'App\Http\Controllers\TestimoniController@update' )->name('update.testimoni')->middleware('auth');


//route admin delete
Route::get('/admin/delete/pesanan/{pesanan}', 'App\Http\Controllers\PesananController@destroy' )->name('delete.pesanan')->middleware('auth');
Route::get('/admin/delete/layanan/{layanan}', 'App\Http\Controllers\LayananController@destroy' )->name('delete.layanan')->middleware('auth');
Route::get('/admin/delete/news/{news}', 'App\Http\Controllers\NewsController@destroy' )->name('delete.news')->middleware('auth');
Route::get('/admin/delete/portofolio/{portofolio}', 'App\Http\Controllers\PortofolioController@destroy' )->name('delete.portofolio')->middleware('auth');
Route::get('/admin/delete/testimoni/{testimoni}', 'App\Http\Controllers\TestimoniController@destroy' )->name('delete.testimoni')->middleware('auth');
require __DIR__.'/auth.php';

Route::get('/logout', 'PesananController@logout');
