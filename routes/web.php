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

Route::get('/lotomania', function () {
    return view('lotomania');
})->name('lotomania');

Route::get('/lotofacil', function () {
    return view('lotofacil');
})->name('lotofacil');

Route::get('/api', function () {
    return view('api');
})->name('api');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
