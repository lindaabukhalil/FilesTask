<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

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

Route::get('/', function () { return view('upload.index'); });

Route::get('/upload',[UploadController::class,'index'])->name('upload');
Route::get('/admin',[UploadController::class,'showAll'])->name('show');
Route::get('/download/{id}',[UploadController::class,'download'])->name('download');
Route::Post('',[UploadController::class,'store'])->name('create');

