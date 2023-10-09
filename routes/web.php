<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\Sub_kegiatanController;


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

// route layout
Route::get('/',[DashboardController::class,'index']);

Route::prefix('admin')->group(function(){
// route bidang
Route::get('/bidang',[BidangController::class,'index']);
Route::get('/bidang/create',[BidangController::class,'create']);
Route::post('/bidang/store',[BidangController::class,'store']);
Route::get('/bidang/create',[BidangController::class,'create']);
Route::get('/bidang/edit/{id}', [BidangController::class, 'edit']);
Route::post('/bidang/update', [BidangController::class, 'update']);
Route::get('/bidang/delete/{id}', [BidangController::class, 'destroy']);
// Route Program
Route::get('/program',[ProgramController::class,'index']);
Route::get('/program/create',[ProgramController::class,'create']);
Route::post('/program/store',[ProgramController::class,'store']);
Route::post('/program/tambahdata',[ProgramController::class,'tambahdata']);
Route::get('/program/detail/{id}', [ProgramController::class, 'detail']);
Route::post('/program/modif', [programController::class, 'modif']);
Route::get('/program/edit/{id}', [ProgramController::class, 'edit']);
Route::post('/program/update', [programController::class, 'update']);
Route::get('/program/delete/{id}', [programController::class, 'destroy']);
Route::get('/program/getkegiatan',[ProgramController::class,'get_kegiatan']);
Route::get('/program/showmodal',[ProgramController::class,'show_modal']);
Route::get('/program/getsubkegiatan',[ProgramController::class,'getsubkegiatan']);
// kegiatan
Route::get('/program/show_ubah', [programController::class, 'show_ubah']);
Route::post('/program/ubahaction', [programController::class, 'ubahaction']);
// subkegiatan
Route::get('/program/show_edit', [programController::class, 'show_edit']);
Route::post('/program/editaction', [programController::class, 'editaction']);
Route::post('/program/hapus/{id}', [programController::class, 'hapus'])->name('program.hapus');


//Route Kegiatan
Route::get('/kegiatan',[KegiatanController::class,'index']);
Route::get('/kegiatan/create/{id}',[KegiatanController::class,'create']);
Route::post('/kegiatan/store',[KegiatanController::class,'store']);

Route::get('/kegiatan/delete/{id}', [KegiatanController::class, 'destroy']);
// // Rout Sub Kegiatan
Route::get('/sub_kegiatan',[Sub_kegiatanController::class,'index']);
// Route::get('/sub_kegiatan/create',[Sub_kegiatanController::class,'create']);
Route::post('/sub_kegiatan/store',[Sub_kegiatanController::class,'store']);
// Route::get('/sub_kegiatan/edit/{id}', [Sub_kegiatanController::class, 'edit']);
// Route::post('/sub_kegiatan/update', [Sub_kegiatanController::class, 'update']);
// Route::get('/sub_kegiatan/delete/{id}', [Sub_kegiatanController::class, 'destroy']);


});