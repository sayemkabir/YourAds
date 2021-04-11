<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\AdvertisersController;
use App\Http\Controllers\Backend\EarnerController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AdsController;
use App\Http\Controllers\Backend\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for yo  ur application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Dashboard
Route::get('/',[DashboardController::class,'viewDashboard'])->name('dashboard');

//Admin
Route::get('/admin',[AdminController::class,'viewAdmin'])->name('admin.view');
Route::get('/admin/create/form',[AdminController::class,'viewAdminForm'])->name('admin.form');
Route::post('/admin/create',[AdminController::class,'createAdmin'])->name('admin.create');
Route::get('/admin/delete/{id}',[AdminController::class,'deleteAdmin'])->name('admin.delete');

//Category
Route::get('/category',[CategoryController::class,'viewCategory'])->name('category.name');
Route::post("/category/create",[CategoryController::class,'createCategory'])->name('category.create');

//Advertisers
Route::get('/advertisers',[AdvertisersController::class,'viewAdvertisers'])->name('advertisers.view');
Route::get('/advertisers/form',[AdvertisersController::class,'advertisersForm'])->name('advertisers.form');
Route::post('/advertisers/create',[AdvertisersController::class,'advertiserCreate'])->name('advertisers.create');

//Earners
Route::get('/earners',[EarnerController::class,'viewEarners'])->name('earner.name');
Route::get('/earner/createPage',[EarnerController::class,'viewCreate'])->name('earner.create.view');
Route::post('/earner/create',[EarnerController::class,'createEarner'])->name('earner.create');
Route::get('/earner/delete/{id}',[EarnerController::class,'earnerDelete'])->name('earner.delete');

//Ads
Route::get('/ads',[AdsController::class,'viewAds'])->name('ads.view');
Route::get('/ads/create',[AdsController::class,'createAds'])->name('ads.form');
Route::post('/ads/create/form',[AdsController::class,'adsCreateForm'])->name('ads.create');
