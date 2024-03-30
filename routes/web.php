<?php

use App\Http\Controllers\Admin\CostumerController;
use App\Http\Controllers\Admin\TransaksiController;
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
        Route::post('/up-undangancetak', [UndanganCetakController::class, 'update']);
        Route::get('/delete/{uid}', [UndanganCetakController::class, 'delete']);
        Route::post('/delImg', [UndanganCetakController::class,'deleteImage'])->name('imageDelete');


        Route::post('/add-costumer', [CostumerController::class, 'add']);
        Route::post('/up-costumer', [CostumerController::class, 'update']);
        Route::get('/delete-costumer/{uid}', [CostumerController::class, 'delete']);
        Route::get('/costumer/detail/{uid}',[CostumerController::class, 'detail']);

        Route::get('transaksi/create', [TransaksiController::class, 'create']);
    });
    
    Route::get('/dashboard/undangan', [UndanganCetakController::class, 'index']);
    Route::get('/dashboard/costumer', [CostumerController::class, 'costumer']);
    Route::get('/dashboard/transaksi', [TransaksiController::class, 'index']);


});
