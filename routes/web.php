<?php

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
Route::get('/calculo', [App\Http\Controllers\CalculoController::class, 'calculo'])->name('calculo');
Route::get('/', function () {
    return view('calculo');




});
