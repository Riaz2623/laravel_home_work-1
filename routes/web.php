<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NumberController;

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

Route::get('/',[ViewController::class,'index'])->name('home');
Route::get('/series',[ViewController::class,'series'])->name('series');
Route::get('/calculator',[ViewController::class,'calculator'])->name('calculator');
Route::get('/password',[ViewController::class,'password'])->name('password');
Route::get('/blog',[ViewController::class,'blog'])->name('blog');
Route::get('/number',[ViewController::class,'number'])->name('number');
Route::get('/details/{id}',[ViewController::class,'details'])->name('details');


Route::post('/full-name',[UserController::class,'fullName'])->name('full-name');
Route::post('/series',[UserController::class,'series'])->name('series');
Route::post('/password',[NumberController::class,'password'])->name('password');
//Route::post('/newPassword',[NumberController::class,'newPassword'])->name('newPassword');
Route::post('/calculator',[NumberController::class,'calculator'])->name('calculator');
Route::post('/number',[NumberController::class,'number'])->name('number');


