<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\LoginController;

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

Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', [LoginController::class, 'index']);

Route::get('/footer', function () {
    return view('footer');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/login1', function () {
    return view('login1');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/detail2', function () {
    return view('detail2');
});

Route::get('/detail3', function () {
    return view('detail3');
});

    Route::get('/about', function () {
        return view('about');
    });

Route::get('/regis', function () {
        return view('regis');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dessert1', function () {
    return view('dessert1');
});

Route::get('/dessert2', function () {
    return view('dessert2');
});

Route::get('/dessert3', function () {
    return view('dessert3');
});

Route::get('/makanan1', function () {
    return view('makanan1');
});

Route::get('/makanan2', function () {
    return view('makanan2');
});

Route::get('/makanan3', function () {
    return view('makanan3');
});

Route::get('/minum1', function () {
    return view('minum1');
});

Route::get('/minum2', function () {
    return view('minum2');
});

Route::get('/minum3', function () {
    return view('minum3');
});

Route::get('/main1', function () {
    return view('main1');
});

Route::get('/main2', function () {
    return view('main2');
});

Route::get('/main3', function () {
    return view('main3');
});

