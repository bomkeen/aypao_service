<?php

use App\Http\Controllers\CctvController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CctvsettingController;
use App\Http\Controllers\CctvmaController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

//cctv route
Route::get('/cctv', [CctvController::class, 'index'])->name('cctv');
Route::get('/cctv/add', [CctvController::class, 'add'])->name('cctv_add');
Route::get('/cctv/edit/{id}', [CctvController::class, 'edit'])->name('cctv_edit');
Route::post('/cctv/update/{id}', [CctvController::class, 'update'])->name('cctv_update');
Route::post('/cctv/insert', [CctvController::class, 'insert'])->name('cctv_insert');
Route::get('/cctv/pdf', [CctvController::class, 'pdf'])->name('cctv_pdf');
Route::get('/cctv/detail/{id}', [CctvController::class, 'detail'])->name('cctv_detail');

// end cctv route

//user route
Route::get('/user', [UserController::class, 'index'])->name('user');
//end user route

//setting route
Route::get('/cctv_setting', [CctvsettingController::class, 'index'])->name('cctv_setting');
Route::get('/cctv_setting/setting_project', [CctvsettingController::class, 'setting_project'])->name('cctv_setting_project');
Route::post('/cctv_setting/setting_project', [CctvsettingController::class, 'setting_project_insert'])->name('setting_project_insert');
Route::post('/cctv_setting/setting_project/{id}', [CctvsettingController::class, 'setting_project_edit'])->name('setting_project_edit');
// Route::post('/cctv_setting/setting_project/{id}', [CctvsettingController::class, 'setting_project_delete'])->name('setting_project_delete');
//end setting route

// IPC route
Route::get('/cctv_setting/setting_ipc', [CctvsettingController::class, 'setting_ipc'])->name('cctv_setting_ipc');
////end IPC route

//cctv_ma route
Route::get('/cctv_ma', [CctvmaController::class, 'index'])->name('cctv_ma');
Route::get('/cctv_ma/add', [CctvmaController::class, 'add'])->name('cctv_ma_add');
//end cctv_ma route

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
