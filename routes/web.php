<?php

use App\Http\Controllers\dash\AccessoryController;
use App\Http\Controllers\dash\BatteryController;
use App\Http\Controllers\dash\EngineController;
use App\Http\Controllers\dash\FilterController;
use App\Http\Controllers\dash\TireController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\website\OrderController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        //---------------------------------------dash----------------------------

    Route::get('/', [OrderController::class,'index']);

    Route::get('/checkRole', [HomeController::class,'checkRole'])->middleware(['auth', 'verified'])->name('checkRole');

Route::group(['middleware'=>'auth'],function (){


    Route::resource('tires',TireController::class)->except('show');
    Route::resource('engines',EngineController::class)->except('show');
    Route::resource('filters',FilterController::class)->except('show');
    Route::resource('batteries',BatteryController::class)->except('show');
    Route::resource('accessories',AccessoryController::class)->except('show');


});

//----------------------------------------end dash--------------------------------------------



//    Route::resource('orders',OrderController::class)->except('show');



});




























Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
