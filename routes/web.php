<?php

use App\Http\Controllers\Admin\UndanganCetakController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Middleware\EnsureTokenIsValid;
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

Route::get('/', [IndexController::class, 'index']);
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});
Route::post('/authLogin', [AuthController::class, 'AuthLogin']);

Route::get('/undangan-cetak', function () {
    return view('frontend.undangan');
});
Route::get('/detail', function () {
    return view('frontend.detail');
});

Route::middleware('auth')->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', function () {
            return view('backend.index');
        });
        Route::post('/add-undangancetak', [UndanganCetakController::class, 'add']);
        Route::get('/delete/{uid}', [UndanganCetakController::class, 'delete']);
    });
    
    Route::get('/dashboard-undangan', [UndanganCetakController::class, 'index']);
});
