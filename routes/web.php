<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PoetryController;
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

Route::get('/', [HomeController::class,'index']);

Route::get('/poetry',[PoetryController::class, 'indexx']);
Route::get('/gallery',[PoetryController::class, 'gallery']);
Route::get('/welcome',[PoetryController::class, 'index']);

Route::get('/poetry/{id}',[PoetryController::class, 'show']);

Route::get('/poetry/data/create',[PoetryController::class, 'create']);

Route::post('/poetry',[PoetryController::class, 'store']);

Route::get('/poetry/{id}/edit',[PoetryController::class,'edit']);

Route::put('/poetry/{id}',[PoetryController::class, 'update']);

Route::delete('/poetry/{id}',[PoetryController::class, 'destroy']);












