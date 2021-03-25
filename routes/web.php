<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\AdvertisersController;
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
Route::get('/category',[CategoryController::class,'viewcategory'])->name('category.name');

Route::get('/advertisers',[AdvertisersController::class,'viewadvertisers'])->name('advertisers.name');

Route::post("/category/create",[CategoryController::class,'createcategory'])->name('category.create');
