<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AuthenticateController;
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


Route::get('/locale/{language}', [LanguageController::class, 'localization']);
Route::get('/', [UserController::class,'Index'])->name('Index');

Route::group(['middleware' => ['locale']], function(){

    Route::get('/Register', [UserController::class,'Register']);
    Route::post('/AddAccount', [AuthenticateController::class,'AddAccount']);

    Route::get('/Login', [UserController::class,'Login']);
    Route::post('/Login', [AuthenticateController::class,'Auth']);


    Route::group(['middleware' => ['auth']], function(){
        Route::get('/Home', [ProductController::class,'Home']);
        Route::get('/Detail/{id}', [ProductController::class,'Detail']);
        Route::get('/Cart',[OrderController::class,'Cart']);
        Route::post('/Buy/{id}',[OrderController::class,'Add']);
        Route::get('/Logout',[AuthenticateController::class,'logout']);
        Route::post('/Delete/{id}',[OrderController::class,'Delete']);
        Route::post('/Checkout',[OrderController::class,'DeleteCart']);
        Route::get('/Profile',[UserController::class,'Profile']);
        Route::patch('/Updates',[AuthenticateController::class ,'Update']);
        Route::get('/CheckoutSucces',[OrderController::class,'Success']);
        Route::get('/UpdateSucces',[AuthenticateController::class,'Success']);

        Route::group(['middleware'=>['security']], function(){
            Route::get('/AccoutManagement',[AdminController::class,'AccoutManagement']);
            Route::get('/Update/{id}',[AdminController::class,'Update']);
            Route::patch('/UpdateRole/{id}',[AdminController::class,'UpdateRole']);
            Route::post('/DeleteAccount/{id}',[AdminController::class,'DeleteAccount']);
        });
    });
} );

// Bryan Theophillus - 2401953966
