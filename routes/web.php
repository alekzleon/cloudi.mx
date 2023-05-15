<?php

use App\Http\Controllers\AppsController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware;

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


Route::post('thankyou', [AppsController::class, 'register'])->middleware('validatepost')->name('register');
Route::get('aviso-de-privacidad', [AppsController::class, 'privacy'])->name('privacy');


