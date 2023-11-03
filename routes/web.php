<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\BidangController;
use App\Http\Controllers\admin\ProgramController;
use App\Http\Controllers\admin\KegiatanController;
use App\Http\Controllers\admin\Sub_kegiatanController;
use App\Http\Controllers\admin\SesiController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
// controller bidang
use App\Http\Controllers\bidang\DshboardController;
use App\Http\Controllers\bidang\TargetController;
use App\Http\Controllers\bidang\TriwulanController;

use App\Http\Controllers\bendahara\B_dashboardController;
use App\Http\Controllers\bendahara\B_targetController;

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

// login
// Route::get('/', [SesiController::class, 'index']);
// Route::post('/', [SesiController::class, 'login']);

// route layout

Route::get('/dashboard',[DashboardController::class,'index']);

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
Route::post('/sub_kegiatan/storedata',[Sub_kegiatanController::class,'storedata']);
Route::get('/program/getsubkegiatan',[ProgramController::class,'getsubkegiatan']);
// kegiatan
Route::get('/program/show_ubah', [programController::class, 'show_ubah']);
Route::post('/program/ubahaction', [programController::class, 'ubahaction']);
Route::post('/program/delete/{id}', [programController::class, 'delete'])->name('program.delete');
Route::get('/kegiatan',[KegiatanController::class,'index']);
Route::get('/kegiatan/create/{id}',[KegiatanController::class,'create']);
Route::post('/kegiatan/store',[KegiatanController::class,'store']);
Route::get('/kegiatan/delete/{id}', [KegiatanController::class, 'destroy']); 
// subkegiatan
Route::get('/program/show_edit', [programController::class, 'show_edit']);
Route::post('/program/editaction', [programController::class, 'editaction']);
Route::post('/program/hapus/{id}', [programController::class, 'hapus'])->name('program.hapus');
Route::get('/sub_kegiatan',[Sub_kegiatanController::class,'index']);
//Route User
// Route::get('/user/tampil',[Role_userController::class,'tampil']);
Route::get('/user',[UserController::class,'index']);
Route::get('/user/create',[UserController::class,'create']);
Route::post('/user/store',[UserController::class,'store']);



});

Route::prefix('bidang')->group(function(){

Route::get('/dashboard',[DshboardController::class,'index']);
Route::get('/getdata',[TargetController::class,'getdata']);
Route::get('/target',[TargetController::class,'index']);
Route::get('/target/detail/{id}',[TargetController::class,'detail']);
Route::post('/target/modif', [TargetController::class, 'modif']);
Route::get('/target/input/{id}',[TargetController::class,'input'])->name('target.input.id');
Route::post('/target/store/{id}',[TargetController::class,'store']);
// route triwulan
Route::get('/triwulan',[TriwulanController::class,'index']);
Route::get('/tridata',[TriwulanController::class,'tridata']);
Route::get('/triwulan/detail/{id}',[TriwulanController::class,'detail']);
Route::post('/triwulan/store', [TriwulanController::class, 'store'])->name('triwulan.store');
Route::get('/triwulan/input/{id}',[TriwulanController::class,'input'])->name('triwulan.input');

});

//Route Bendahara
Route::prefix('bendahara')->group(function(){
    Route::get('/dashboard',[B_dashboardController::class,'index']);
    Route::get('/target',[B_targetController::class,'index']);
    Route::get('/target/detail',[B_targetController::class,'detail']);
    Route::get('/target/input',[B_targetController::class,'input']);
});




Auth::routes([
    'login'=>false,
    'register'=>false,
    'confirm'=>false,
    'home'=>false   
]);
Route::get('/', [LoginController::class,'showLoginForm']);
Route::POST('login', [LoginController::class,'login'])->name('login');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
