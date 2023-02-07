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

Auth::routes();

Route::get('/' , [HomeController::class , 'index'])->name('landing_page');
Route::middleware(['auth'])->group(function(){
    Route::get('/profile' , [ProfileController::class , 'index'])->name('profile');
    Route::post('/profile/{user}' , [ProfileController::class , 'update'])->name('profile.update');
    Route::get('/dashboard', [PlatController::class, 'index'])->name('home');
    Route::post('/dashboard', [PlatController::class, 'create'])->name('plat.create');
    Route::delete('/dashboard/{plat}', [PlatController::class, 'destroy'])->name('plat.destroy');
    Route::get('/dashboard/{plat}', [PlatController::class, 'edit'])->name('plat.edit');
    Route::post('/dashboard/{plat}', [PlatController::class, 'update'])->name('plat.update');
});
