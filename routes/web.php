<?php

use App\Http\Controllers\AdminModelController;
use App\Http\Controllers\UserModelController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [UserModelController::class, 'index'])->name('user');
Route::post('/user/insert', [UserModelController::class, 'insertSurat']);
Route::get('/admin', [AdminModelController::class, 'index'])->name('admin');
Route::get('/admin/detail/{id_surat}', [AdminModelController::class, 'detailSurat']);
Route::get('/admin/add', [AdminModelController::class, 'addSurat']);
Route::post('/admin/insert', [AdminModelController::class, 'insertSurat']);
Route::get('/admin/edit/{id_surat}', [AdminModelController::class, 'editSurat']);
Route::post('/admin/update/{id_surat}', [AdminModelController::class, 'updateSurat']);
Route::get('/admin/delete/{id_surat}', [AdminModelController::class, 'deleteSurat']);
Route::get('/admin/print/{id_surat}', [AdminModelController::class, 'printSurat']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
