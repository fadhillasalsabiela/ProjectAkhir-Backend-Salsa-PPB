<?php

use App\Http\Controllers\GunungController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
   // return $request->user();
//});

Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);
Route::get('gunung', [GunungController::class, 'getgunung']);
Route::get('gunung/{id_kategori}', [GunungController::class, 'getgunungkat']);
Route::post('post-gunung', [GunungController::class, 'postgunung']);
Route::get('get-kategori', [KategoriController::class, 'getkategori']);
Route::post('post-kategori', [KategoriController::class, 'postkategori']);
