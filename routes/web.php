<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
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
Route::get('admin',[HomeController::class,'admin'])->name('admin');
Route::get('homes',[ProductController::class,'homes'])->name('homes');

Route::get('category',[ProductController::class,'category'])->name('category');
Route::get('slide',[ProductController::class,'slide'])->name('slide');