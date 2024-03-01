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
    return view('frontend.index');
});
Route::get('/undangan-cetak', function () {
    return view('frontend.undangan');
});
Route::get('/detail', function () {
    return view('frontend.detail');
});
Route::get('/dashboard', function () {
    return view('backend.index');
});
Route::get('/dashboard-undangan', function () {
    return view('backend.undangancetak');
});
