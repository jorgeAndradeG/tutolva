<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudAdminController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('/crudadmin', crudAdminController::class);
Route::get('listaTolva', function () {
    return view('tolva/listaTolva');
});

Route::get('inicio', function () {
    return view('tolva/inicio');
});

Route::get('verTolva', function () {
    return view('tolva/verTolva');
});

require __DIR__.'/auth.php';
