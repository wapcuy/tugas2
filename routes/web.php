<?php

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

Route::get('/home', function () {
    return view('jam.home');
});

Route::get('/login', function () {
    return view('jam.login');
});

Route::get('/brands', function () {
    return view('jam.brands');
});

Route::get('/register', function () {
    return view('jam.register');
});

Route::get('/men', function () {
    return view('jam.men');
});

Route::get('/checkout', function () {
    return view('jam.checkout');
});

Route::get('/base', function () {
    return view('admin.base');
});

Route::get('beranda', function () {
    return view('beranda');
});

Route::get('produk', function () {
    return view('produk');
});

Route::get('kategori', function () {
    return view('kategori');
});

Route::get('promo', function () {
    return view('promo');
});

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});