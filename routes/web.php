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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [App\Http\Controllers\IntershipController::class, 'index']);
Route::get('index', [App\Http\Controllers\IntershipController::class, 'index']);
Route::get('aboutUs', [App\Http\Controllers\IntershipController::class, 'aboutUs']);
Route::get('contactUs', [App\Http\Controllers\IntershipController::class, 'contactUs']);