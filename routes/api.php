<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/mahasiswa',[UserController::class,'get_all']);
Route::post('/add_mhs',[UserController::class,'add_mhs']);
Route::post('/add_matkul',[UserController::class,'add_matkul']);
Route::post('/delete_mhs',[UserController::class,'delete_mhs']);
Route::post('/delete_matkul',[UserController::class,'delete_matkul']);