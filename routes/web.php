<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrCodeGeneratorController;
use App\Http\Controllers\ZipArchiveController;
use App\Http\Controllers\sendResponseController;

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

Route::get('/qr-code',[QrCodeGeneratorController::class,'index'])->name('qr-code');
Route::get('/create-zip',[ZipArchiveController::class,'index'])->name('create-zip');
//Route::get('/sendResponse',[sendResponseController::class,'contact']);

Route::post('/strings',[QrCodeGeneratorController::class,'store']);


Route::get('/home', function () {
    return view('vue');
})->where('any', '.*');