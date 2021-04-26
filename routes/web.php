<?php

use App\Http\Controllers\CctvController;
use App\Http\Controllers\UserController;
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
Route::post('/cctv/insert', [CctvController::class, 'insert'])->name('cctv_insert');
Route::post('/cctv/fetch', [CctvController::class, 'fetch'])->name('dropdown_fetch');
// end cctv route

//user route
Route::get('/user', [UserController::class, 'index'])->name('user');
//end user route

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
