<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NurseController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nurse', [NurseController::class, 'index'])->name('nurse.index');
Route::get('/nurse/create', [NurseController::class, 'create'])->name('nurse.create');
Route::post('/nurse/store', [NurseController::class, 'store'])->name('nurse.store');
Route::get('/nurse/{id}/edit', [NurseController::class, 'edit'])->name('nurse.edit');
Route::put('/nurse/{id}', [NurseController::class, 'update'])->name('nurse.update');
Route::delete('/nurse/{id}', [NurseController::class, 'destroy'])->name('nurse.destroy');
