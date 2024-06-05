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

Route::view('/', 'inicio')->name('inicio');
Route::view('programas', 'programas')->name('programas');
//Route::view('talleres', 'talleres')->name('talleres');

Route::get('talleres', 'App\Http\Controllers\TalleresController@talleres')->name('talleres');

Route::view('asesoramiento', 'asesoramiento')->name('asesoramiento');
Route::view('contacto', 'contacto')->name('contacto');