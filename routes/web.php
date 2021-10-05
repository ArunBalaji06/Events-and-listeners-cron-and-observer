<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FileController;

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

Route::get('/register',[AuthController::class,'index']);
Route::POST('/post-register',[AuthController::class,'postRegister'])->name('post-register');

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/post-login',[AuthController::class,'postLogin'])->name('post-login');

Route::get('/calculate-age/{name}',[AuthController::class,'calculateAge'])->name('calculate-age');

Route::get('/file-import-export-page',[FileController::class,'getPage'])->name('file.page');
Route::post('/file-submit',[FileController::class,'submitFile'])->name('file.submit');
Route::get('/download-csv',[FileController::class,'exportCSV'])->name('file.csv');







