<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudAdminController;
use App\Http\Controllers\VerTolvaController;
use App\Http\Controllers\DetalleTolvaController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/', VerTolvaController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('/crudadmin', crudAdminController::class);
Route::resource('/DetalleTolvaController', DetalleTolvaController::class);

Route::post('/crudadmin/eliminar',[crudAdminController::class, 'eliminar']);

// Route::resource('/listaTolva', VerTolvaController::class);

require __DIR__.'/auth.php';
