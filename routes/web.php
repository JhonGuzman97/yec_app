<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\GoodfatherController;
use App\Http\Controllers\YoReportoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomeController::class)->name('welcome');
Route::get('menu',[MenuController::class,'index'])->name('menu.index');
Route::post('menu',[MenuController::class,'index'])->name('menu.index');
Route::get('goodfather',[GoodfatherController::class,'index'])->name('goodfather.index');
Route::post('goodfather',[GoodfatherController::class,'store'])->name('goodfather.store');
Route::get('yoreporto',[YoReportoController::class,'index'])->name('yoreporto.index');
Route::post('yoreporto',[YoReportoController::class,'store'])->name('yoreporto.store');