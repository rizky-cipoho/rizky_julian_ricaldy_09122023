<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/', [TestController::class, "first"]);
Route::get('/task2', [TestController::class, "second"]);
Route::post('/secondvalue', [TestController::class, "secondvalue"]);
Route::post('/delete/{id}', [TestController::class, "seconddelete"]);
Route::post('/edit/{id}', [TestController::class, "secondedit"]);
