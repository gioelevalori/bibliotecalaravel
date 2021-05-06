<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtenteController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\AutoreController;
use App\Http\Controllers\EditoreController;
use App\Http\Controllers\AdminUtenteController;
use App\Http\Controllers\AdminAutoreController;
use App\Http\Controllers\AdminEditoreController;
use App\Http\Controllers\AdminLibroController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
});



Route::get('/admin', function () {
    return view('admin.index');
})->middleware('admin');

Route::resource('admin/libri', AdminLibroController::class);
Route::resource('admin/autori', AdminAutoreController::class);
Route::resource('admin/editori', AdminEditoreController::class);
Route::resource('admin/utenti', AdminUtenteController::class);
Route::resource('utenti', UtenteController::class);
Route::resource('libri', LibroController::class);
Route::resource('autori', AutoreController::class);
Route::resource('editori', EditoreController::class);


require __DIR__.'/auth.php';
Auth::routes();
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
