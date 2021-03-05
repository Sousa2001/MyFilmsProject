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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('video', 'App\Http\Controllers\VideoController');
Route::resource('profile', 'App\Http\Controllers\ProfileController');
Route::resource('public', 'App\Http\Controllers\PublicController');

Route::get('/edit', [App\Http\Controllers\VideoController::class, 'index'])->name('edit');
Route::get('/newvideo', [App\Http\Controllers\VideoController::class, 'newvideo'])->name('newvideo');
Route::get('/', [App\Http\Controllers\PublicController::class, 'show'])->name('show');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');


