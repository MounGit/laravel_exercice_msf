<?php

use App\Http\Controllers\BatimentController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\TypeformationController;
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


// FORMATIONS
Route::get('/formations', [FormationController::class, 'index'])->name('indexForm');

Route::get('/formations/back', [FormationController::class, 'indexBack'])->name('indexBackForm');

Route::get('/formations/back/create', [FormationController::class, 'create'])->name('createForm');

Route::post('/formations/back/store', [FormationController::class, 'store'])->name('storeForm');

Route::get('/formations/{id}/back/show', [FormationController::class, 'show'])->name('showForm');

Route::delete('formations/{id}/back/delete', [FormationController::class, 'destroy'])->name('deleteForm');

Route::get('/formations/{id}/back/edit', ([FormationController::class, 'edit']))->name('editForm');

Route::put('/formations/{id}/back/update', ([FormationController::class, 'update']))->name('updateForm');


// TYPES 
Route::get('/typesFormation', [TypeformationController::class, 'index'])->name('indexType');

Route::get('/typesFormation/back', [TypeformationController::class, 'indexBack'])->name('indexBackType');

Route::get('/typesFormation/back/create', [TypeformationController::class, 'create'])->name('createType');

Route::post('/typesFormation/back/store', [TypeformationController::class, 'store'])->name('storeType');

Route::get('/typesFormation/{id}/back/show', [TypeformationController::class, 'show'])->name('showType');

Route::delete('typesFormation/{id}/back/delete', [TypeformationController::class, 'destroy'])->name('deleteType');

Route::get('/typesFormation/{id}/back/edit', ([TypeformationController::class, 'edit']))->name('editType');

Route::put('/typesFormation/{id}/back/update', ([TypeformationController::class, 'update']))->name('updateType');


// ELEVES
Route::get('/eleves', [EleveController::class, 'index'])->name('indexEle');

Route::get('/eleves/back', [EleveController::class, 'indexBack'])->name('indexBackEle');

Route::get('/eleves/back/create', [EleveController::class, 'create'])->name('createEle');

Route::post('/eleves/back/store', [EleveController::class, 'store'])->name('storeEle');

Route::get('/eleves/{id}/back/show', [EleveController::class, 'show'])->name('showEle');

Route::delete('eleves/{id}/back/delete', [EleveController::class, 'destroy'])->name('deleteEle');

Route::get('/eleves/{id}/back/edit', ([EleveController::class, 'edit']))->name('editEle');

Route::put('/eleves/{id}/back/update', ([EleveController::class, 'update']))->name('updateEle');

