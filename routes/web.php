<?php

use App\Http\Controllers\PlatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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

Route::get('/profile' , [ProfileController::class , 'index'])->middleware('auth')->name('profile');
Route::post('/profile/{user}' , [ProfileController::class , 'update'])->middleware('auth')->name('profile.update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [PlatController::class, 'create'])->name('plat.create');
