<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('welcome');
});
Route::post('login',[LoginController::class,'login'])->name('login');
Route::post('logout',[LoginController::class,'destroy'])->name('logout');
Route::inertia('login','Auth/Login')->name('login');
Route::group(['middleware'=>'auth'],function(){
    Route::resource('posts',PostController::class);
    Route::inertia('about','Posts/About')->name('pages.about');
});

