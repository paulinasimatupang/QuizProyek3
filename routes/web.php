<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PujaseraController;

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



Route::get('/tambahdatabarang', [PujaseraController::class, 'tambahdatabarang'])->name('tambahdatabarang');
Route::post('/insertdatabarang', [PujaseraController::class, 'insertdatabarang'])->name('insertdatabarang');
Route::get('/editdatabarang/{id}', [PujaseraController::class, 'editdatabarang'])->name('editdatabarang');
Route::post('/updatedatabarang/{id}', [PujaseraController::class, 'updatedatabarang'])->name('updatedatabarang');
Route::get('/deletebarang/{id}', [PujaseraController::class, 'deletebarang'])->name('deletebarang');