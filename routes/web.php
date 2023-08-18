<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

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

Route::get('/', [PrincipalController::class,'index']);
Route::get('/desafio/create', [PrincipalController::class,'create']);
Route::post('/desafio', [PrincipalController::class,'store']);
Route::get('/desafio/{id}', [PrincipalController::class,'show']);
Route::delete('/desafio/{id}', [PrincipalController::class,'destroy']);
Route::get('/desafio/edit/{id}', [PrincipalController::class,'edit']);
Route::put('/desafio/update/{id}', [PrincipalController::class,'update']);
