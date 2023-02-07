<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/profile' , [ProfileController::class , 'index'])->middleware('auth')->name('profile');
Route::post('/profile/{user}' , [ProfileController::class , 'update'])->middleware('auth')->name('profile.update');

Auth::routes();

Route::get('/' , [HomeController::class , 'index'])->name('landing_page');
Route::get('/dashboard/home', [PlatController::class, 'index'])->name('home');
Route::post('/dashboard/home', [PlatController::class, 'create'])->name('plat.create');
Route::delete('/dashboard/home/{plat}', [PlatController::class, 'destroy'])->name('plat.destroy');
Route::get('/dashboard/home/{plat}', [PlatController::class, 'edit'])->name('plat.edit');
Route::post('/dashboard/home/{plat}', [PlatController::class, 'update'])->name('plat.update');
