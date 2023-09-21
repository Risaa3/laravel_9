<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SekolahController;

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


Route::get('/sekolahs', [SekolahController::class, 'index'])->name('sekolahs.index');

Route::get('/sekolahs/tambah', [SekolahController::class, 'tambah']);
Route::post('/sekolahs', [SekolahController::class, 'simpan']);
Route::get('/sekolahs/{id}/edit', [SekolahController::class, 'edit'])->name('sekolahs.edit');
Route::put('/sekolahs/{id}/', [SekolahController::class, 'update'])->name('sekolahs.update');
Route::delete('/sekolahs/{id}/', [SekolahController::class, 'destroy'])->name('sekolahs.destroy');

Route::get('/home', function () {
    return view('home');
});