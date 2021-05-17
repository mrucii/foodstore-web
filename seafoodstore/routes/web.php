<?php

use App\Http\Controllers\product_controller;
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



Route::get('/blog', 'post_controller@index')->name('blogs');

Route::get('/blog/{id}', 'post_controller@detail_blog')-> name('blog_details');

Route::get('/produk', 'product_controller@index')->name('products');

Route::get('/resep', 'resep_controller@index')->name('reseps');

Route::get('/resep/{id}', 'resep_controller@detail_resep')-> name('resep_details');

Route::get('/', 'jproduk_controller@index')->name('get_jenis_produk');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/resep1', function () {
    return view('detailresep');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/b', function () {
    return view('button');
});
