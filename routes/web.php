<?php

use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\BukutamuController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DokterController;
use App\Http\Controllers\Admin\FotoController;
use App\Http\Controllers\Admin\GadungController;
use App\Http\Controllers\Admin\GaleryController;
use App\Http\Controllers\Admin\InformasiController;
use App\Http\Controllers\Admin\KamarController;
use App\Http\Controllers\Admin\KritikSaranController;
use App\Http\Controllers\Admin\PasienController;
use App\Http\Controllers\Admin\PengumumanController;
use App\Http\Controllers\Admin\SurveiController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\login\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// route login
Route::get('/', [LoginController::class,'index'])->name('index-login');


// route dashboard
Route::middleware('auth', 'Checkrole:admin')->group(function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

// route kritik dan saran
Route::get('/kritik/index', [KritikSaranController::class, 'index'])->name('index-kritik');
Route::get('/kritik/create', [KritikSaranController::class, 'create'])->name('create-kritik');
Route::post('/kritik/store', [KritikSaranController::class, 'store'])->name('store-kritik');
Route::delete('/kritik/delete/{id}', [KritikSaranController::class, 'delete'])->name('delete-kritik');
// route  survei
Route::get('/survei/index', [SurveiController::class, 'index'])->name('index-survei');
Route::get('/survei/create', [SurveiController::class, 'create'])->name('create-survei');
Route::post('/survei/store', [SurveiController::class, 'store'])->name('store-survei');
Route::delete('/survei/delete/{id}', [SurveiController::class, 'delete'])->name('delete-survei');
// route buku tamu
Route::get('/bukutamu/index', [BukutamuController::class, 'index'])->name('index-bukutamu');
Route::get('/bukutamu/create', [BukutamuController::class, 'create'])->name('create-bukutamu');
Route::post('/bukutamu/store', [BukutamuController::class, 'store'])->name('store-bukutamu');
Route::delete('/bukutamu/delete/{id}', [BukutamuController::class, 'delete'])->name('delete-bukutamu');

// route video
Route::get('/video/index', [VideoController::class, 'index'])->name('index-video');
Route::post('/video/store', [VideoController::class, 'store'])->name('store-video');
Route::get('/video/create', [VideoController::class, 'create'])->name('create-video');
Route::get('/video/edit/{id}', [VideoController::class, 'edit'])->name('edit-video');
Route::put('/video/update/{id}', [VideoController::class, 'update'])->name('update-video');
Route::delete('/video/delete/{id}', [VideoController::class, 'delete'])->name('delete-video');


// route galery
Route::get('/galery/index', [GaleryController::class, 'index'])->name('index-galery');
Route::get('/galery/create', [GaleryController::class, 'create'])->name('create-galery');
Route::post('/galery/store', [GaleryController::class, 'store'])->name('store-galery');
Route::get('/galery/edit/{id}', [GaleryController::class, 'edit'])->name('edit-galery');
Route::put('/galery/update/{id}', [GaleryController::class, 'update'])->name('update-galery');
Route::delete('/galery/delete/{id}', [GaleryController::class, 'delete'])->name('delete-galery');

// route berita
Route::get('/berita/index', [BeritaController::class, 'index'])->name('index-berita');
Route::get('/berita/create', [BeritaController::class, 'create'])->name('create-berita');
Route::post('/berita/store', [BeritaController::class, 'store'])->name('store-berita');
Route::get('/berita/edit/{id}', [BeritaController::class, 'edit'])->name('edit-berita');
Route::put('/berita/update/{id}', [BeritaController::class, 'update'])->name('update-berita');
Route::delete('/berita/delete/{id}', [BeritaController::class, 'delete'])->name('delete-berita');

Auth::routes();