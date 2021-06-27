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
Route::get('/d', function () {
    return view('index_dashboard');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/blank', function () {
    return view('blank');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/msgvisitor', function () {
    return view('msgvisitor');
});

Route::get('/add_produk', 'product_controller@index_admin')->name('add_index');
Route::post('/add_produk', 'product_controller@create')->name('add_produk');
Route::get('/delete_produk/{id}', 'product_controller@destroy')->name('delete_produk');
Route::post('/add_produk/{id}', 'product_controller@update')->name('edit_produk');


Route::get('/add_blog', 'post_controller@index_admin');
Route::post('/add_blog', 'post_controller@create')->name('add_post');
Route::get('/delete_post/{id}', 'post_controller@destroy')->name('delete_post');
Route::post('/add_blog/{id}', 'post_controller@update')->name('edit_post');

Route::get('/add_resep','resep_controller@index_admin' );
Route::post('/add_resep','resep_controller@create' )->name('add_resep');
Route::get('/delete_resep/{id}', 'resep_controller@destroy')->name('delete_resep');
Route::post('/add_resep/{id}', 'resep_controller@update')->name('edit_resep');