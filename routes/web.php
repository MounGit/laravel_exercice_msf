<?php

use App\Http\Controllers\BatimentController;
use Illuminate\Support\Facades\Route;

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

// HOME
Route::get('/', function () {
    return view('pages.home');
});

// BATIMENTS
Route::get('/batiments', [BatimentController::class, 'index'])->name('indexBat');

Route::get('/batiments/back', [BatimentController::class, 'indexBack'])->name('indexBackBat');

Route::get('/batiments/back/create', [BatimentController::class, 'create'])->name('createBat');

Route::post('/batiments/back/store', [BatimentController::class, 'store'])->name('storeBat');

Route::get('/batiments/{id}/back/show', [BatimentController::class, 'show'])->name('showBat');

Route::delete('batiments/{id}/back/delete', [BatimentController::class, 'destroy'])->name('deleteBat');

Route::get('/batiments/{id}/back/edit', ([BatimentController::class, 'edit']))->name('editBat');

Route::put('/batiments/{id}/back/update', ([BatimentController::class, 'update']))->name('updateBat');

