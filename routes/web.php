<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Models\User;
use App\Models\Mahasiswa;

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

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/login',[AuthController::class,'getLogin']);
Route::post('/login',[AuthController::class,'postLogin'])->name('login');
Route::get('/register',[AuthController::class,'getRegister']);
Route::post('/register',[AuthController::class, 'postRegister'])->name('register');
Route::get('/home',[AuthController::class,'postHome'])->name('home');
Route::get('/biodata',[AuthController::class,'getBiodata']);
Route::get('/tambah_matkul/{NIM}/{nama_matkul}', array ('as' => 'tambah_matkul/NIM/nama_matkul', function ($nim, $matkul) {
    // $mahasiswa = Mahasiswa::create([
    //     'NIM' => $nim
    //     'nama' => $nama
    // ]);
    $mahasiswa = Mahasiswa::findOrFail($nim);

    $mahasiswa->matkul()->create([
        'nama_matkul' => $matkul
    ]);

    return 'Success'; 
}));
Route::get('/tambah_mahasiswa/{NIM}/{nama}', array ('as' => 'tambah_mahasiswa/NIM/nama', function ($nim, $nama){
    $mahasiswa = Mahasiswa::create([
        'NIM' => $nim,
        'nama' => $nama
    ]);
    return 'Berhasil Menambah Mahasiswa';
}));