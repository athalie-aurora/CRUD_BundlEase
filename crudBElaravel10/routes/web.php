<?php

use App\Http\Controllers\HirerController;
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

Route::get('/landingpage', [HirerController::class, 'landingpage'])->name('hirer.landingpage');

Route::get('/hirer/create', [HirerController::class, 'create'])->name('hirer.create');
Route::post('/hirer/store', [HirerController::class, 'store'])->name('hirer.store');

Route::get('/hirer', [HirerController::class, 'index'])->name('hirer.index');
