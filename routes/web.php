<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtenteController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\AutoreController;
use App\Http\Controllers\EditoreController;
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

Route::get('/', function () {
    return view('index');
});



Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');



Route::resource('utenti', UtenteController::class);
Route::resource('libri', LibroController::class);
Route::resource('autori', AutoreController::class);
Route::resource('editori', EditoreController::class);


require __DIR__.'/auth.php';
Auth::routes();