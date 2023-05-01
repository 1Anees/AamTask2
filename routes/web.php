<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\Backend\ShowpostsController;
use App\Http\Controllers\SessionController;
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

Route::resource('blogs', BlogController::class)->middleware('auth');

Route::get('/', [App\Http\Controllers\Backend\DashboardController::class, 'index']);
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');
Route::get('login', [SessionController::class, 'create'])->name('login')->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->middleware('guest');

Route::post('signout', [SessionController::class, 'destroy'])->middleware('auth');


Route::resource('lists', ListController::class);




// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
