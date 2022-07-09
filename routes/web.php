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

Auth::routes();

// category controller;
Route::get('category',[App\Http\Controllers\CategoryController::class,'category']);
Route::POST('category/post',[App\Http\Controllers\CategoryController::class,'categorypost']);



// frontend controller

Route::get('about',[App\Http\Controllers\FrontendController::class,'about']);



//  home controller
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
