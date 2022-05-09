<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeportistasController;
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

/*
Route::get('/Deportistas', function () {
    return view('Deportistas.index');
});

Route::get('Deportistas/create',[DeportistasController::class,'create']);
*/
Route::resource('Deportistas',DeportistasController::class);
//Auth::routes();

Route::get('/home', [DeportistasController::class, 'index'])->name('home');
Route::get('/', [DeportistasController::class, 'index'])->name('home');
