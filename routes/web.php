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
Route::get('/update', [PrincipalController::class,'update']);
Route::get('/edit', [PrincipalController::class,'index']);
Route::get('/delete', [PrincipalController::class,'index']);
