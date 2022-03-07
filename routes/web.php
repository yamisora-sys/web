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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index']);
Route::get('/blog/{post_slug?}', [App\Http\Controllers\BlogController::class, 'blogDetail'])->name('blog');
 
Route::post('/like', [App\Http\Controllers\BlogController::class, 'fetchLike']);
Route::post('/like/{id}', [App\Http\Controllers\BlogController::class, 'handleLike']);
 
Route::post('/dislike', [App\Http\Controllers\BlogController::class, 'fetchDislike']);
Route::post('/dislike/{id}', [App\Http\Controllers\BlogController::class, 'handleDislike']);