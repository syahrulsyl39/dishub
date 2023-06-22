<?php

use App\Http\Controllers\Admin\SurveiController;
use App\Http\Controllers\API\BeritaController;
use App\Http\Controllers\Api\BukutamuController;
use App\Http\Controllers\API\GaleryController;
use App\Http\Controllers\API\InformasiController;
use App\Http\Controllers\API\KritikSaranController;
use App\Http\Controllers\API\PengumumanController;
use App\Http\Controllers\Api\SurveiController as ApiSurveiController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\VideoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('/detail', [UserController::class, 'details']);
});


// route video
Route::get('/video', [VideoController::class, 'index']);
// route berita
Route::get('/berita', [BeritaController::class, 'index']);
// route galery
Route::get('/galery', [GaleryController::class, 'index']);
// route kritik
Route::post('/kritik/create', [KritikSaranController::class, 'store']);
// route saran
Route::post('/survei/create', [ApiSurveiController::class, 'store']);
// route buku tamu
Route::post('/bukutamu/create', [BukutamuController::class, 'store']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
