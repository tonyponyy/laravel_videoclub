<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\ShowController;
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
    return view('paginas/index');
});
Route::get('/login', function () {
    return view('paginas/login');
});
Route::get('/logout', function () {
    return view('paginas/logout');
});
Route::get('/catalog', function () {
    return view('paginas/listapeliculas');
});
Route::get('/catalog/create', function () {
    return view('paginas/anyadir');
});

Route::get('/catalog/edit/{id}', [CatalogoController::class,'ver']) ;

Route::get('/catalog/show/{id}', [ShowController::class,'ver']) ;

