<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\QuestController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\CostumerController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\TransaksiController;
use App\Http\Controllers\Admin\UndanganCetakController;
use App\Models\Testimonial;

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
Route::get('auth/google', [AuthController::class, 'authGoogle']);
Route::get('auth/google/callback', [AuthController::class, 'googleCallback']);

// Route::get('/undangan-cetak', function () {
//     return view('frontend.undangan');
// });
Route::get('/undangan-cetak/{product?}', [IndexController::class, 'undanganCetak']);
Route::get('/product/detail/{product?}',[IndexController::class, 'productDetail'] );
Route::get('/undangan-digital', [IndexController::class, 'undanganDigital']);


Route::middleware(['auth', 'can:dashboard'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', function () {
            // dd(Auth::user()->can('dashboard'));
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

        Route::post('/add-kategori', [KategoriController::class, 'create'])->name('add.kategori');

        Route::post('/add-slide', [SlideController::class, 'add'])->name('addSlide');
        Route::post('/up-slide', [SlideController::class, 'update'])->name('upSlide');
        Route::get('delete/slide/{id}',[SlideController::class, 'delete']);

        Route::post('/add-question',[QuestController::class, 'add']);
        Route::post('/up-question',[QuestController::class, 'update']);
        Route::get('/delete/question/{uid}',[QuestController::class, 'delete']);

        Route::post('/add-testimonial',[TestimonialController::class, 'add']);
        Route::post('/up-testimonial',[TestimonialController::class, 'update']);
        Route::get('/delete/testimonial/{uid}',[TestimonialController::class, 'delete']);



    });

    Route::get('/dashboard/undangan', [UndanganCetakController::class, 'index']);
    Route::get('/dashboard/costumer', [CostumerController::class, 'costumer']);
    Route::get('/dashboard/transaksi', [TransaksiController::class, 'index']);
    Route::get('/dashboard/kategori', [KategoriController::class, 'index']);

    Route::get('/dashboard/slide',[SlideController::class, 'index']);
    Route::get('/dashboard/question',[QuestController::class, 'index']);
    Route::get('/dashboard/testimonial',[TestimonialController::class, 'index']);


});
