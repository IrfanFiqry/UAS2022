<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PelajarController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\JawabanController;

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
    return view('welcome');
});


Route::get('/data/{nama}', [TestingController::class, "data"] )->name("absen");

Route::get('/input-user', [UserController::class, "formInput"])->name("user_input");


//simpan user
Route::post('/simpan-user', [UserController::class, "simpan"])->name("user_simpan");

//form edit user
Route::get('/edit-user/{id}', [UserController::class, "formEdit"])->name("user_edit");

//update user
Route::put('/update-user/{id}', [UserController::class, "update"])->name("user_update");

//hapus user
Route::delete('/delete-user/{id}', [UserController::class,"delete"])->name("user_hapus");

Route::get("/login", [SecurityController::class, "formLogin"])->name("login");
Route::post("/proses-login", [SecurityController::class,"prosesLogin"])->name("proses_login");
Route::get("/logout", [SecurityController::class, "logout"])->name("logout");

Route::middleware("auth")->group(function() {
    //tampil semua user
    Route::get('/tampil-semua-user', [UserController::class, "tampil"])->name("user_tampil");

    //form input user baru
    
    Route::get('/show-user/{id}', [UserController::class, "show"])->name("user_show");

    
    
 });
 
//Route Kategori
 Route::get("kategori/buat", [KategoriController::class, 'buat'])->name("buat_kategori");
 Route::post("kategori/simpan", [KategoriController::class, 'simpan'])->name("simpan_kategori");
 Route::get("kategori/tampil/{id}", [KategoriController::class, 'tampil'])->name("tampil_kategori");
 Route::get("kategori/semua", [KategoriController::class, 'semua'])->name("semua_kategori");
 Route::get("kategori/ubah/{id}", [KategoriController::class, 'ubah'])->name("ubah_kategori");
 Route::put("kategori/update/{id}", [KategoriController::class, 'update'])->name("update_kategori");
 Route::delete("kategori/hapus/{id}", [KategoriController::class, 'hapus'])->name("hapus_kategori");

 //Route Pelajar
 Route::get("pelajar/buat", [PelajarController::class, 'buat'])->name("buat_pelajar");
 Route::post("pelajar/simpan", [PelajarController::class, 'simpan'])->name("simpan_pelajar");
 Route::get("pelajar/tampil/{id}", [PelajarController::class, 'tampil'])->name("tampil_pelajar");
 Route::get("pelajar/semua", [PelajarController::class, 'semua'])->name("semua_pelajar");
 Route::get("pelajar/ubah/{id}", [PelajarController::class, 'ubah'])->name("ubah_pelajar");
 Route::put("pelajar/update/{id}", [PelajarController::class, 'update'])->name("update_pelajar");
 Route::delete("pelajar/hapus/{id}", [PelajarController::class, 'hapus'])->name("hapus_pelajar");

 //Route Soal
 Route::get("soal/buat", [SoalController::class, 'buat'])->name("buat_soal");
 Route::post("soal/simpan", [SoalController::class, 'simpan'])->name("simpan_soal");
 Route::get("soal/tampil/{id}", [SoalController::class, 'tampil'])->name("tampil_soal");
 Route::get("soal/semua", [SoalController::class, 'semua'])->name("semua_soal");
 Route::get("soal/ubah/{id}", [SoalController::class, 'ubah'])->name("ubah_soal");
 Route::put("soal/update/{id}", [SoalController::class, 'update'])->name("update_soal");
 Route::delete("soal/hapus/{id}", [SoalController::class, 'hapus'])->name("hapus_soal");
 Route::get("soal/jawab/{id}", [SoalController::class, 'jawab'])->name("jawab_soal");

 //Route Jawaban
 Route::get("jawaban/buat", [JawabanController::class, 'buat'])->name("buat_jawaban");
 Route::post("jawaban/simpan", [JawabanController::class, 'simpan'])->name("simpan_jawaban");
 Route::get("jawaban/tampil/{id}", [JawabanController::class, 'tampil'])->name("tampil_jawaban");
 Route::get("jawaban/semua", [JawabanController::class, 'semua'])->name("semua_jawaban");
 Route::get("jawaban/ubah/{id}", [JawabanController::class, 'ubah'])->name("ubah_jawaban");
 Route::put("jawaban/update/{id}", [JawabanController::class, 'update'])->name("update_jawaban");
 Route::delete("jawaban/hapus/{id}", [JawabanController::class, 'hapus'])->name("hapus_jawaban");

