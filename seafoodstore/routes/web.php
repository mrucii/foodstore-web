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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', 'post_controller@index');

Route::get('/produk', 'product_controller@index');

Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/blog1', function () {
    return view('detailblog');
});
Route::get('/resep', function () {
    return view('resep');
});
Route::get('/resep1', function () {
    return view('detailresep');
});