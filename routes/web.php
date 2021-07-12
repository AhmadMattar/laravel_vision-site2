<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::prefix('site2')->group(function(){
    Route::get('start',[PagesController::class,'start'])->name('site2start');
    Route::get('about',[PagesController::class,'about'])->name('site2about');
    Route::get('services',[PagesController::class,'services'])->name('site2services');
    Route::get('portfolio',[PagesController::class,'portfolio'])->name('site2portfolio');
    Route::get('contact',[PagesController::class,'contact'])->name('site2contact');
});

Route::get('/', function () {
    return view('welcome');
});
