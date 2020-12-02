<?php

use Illuminate\Support\Facades\Route;
// Customer
use App\Http\Controllers\CustomerController;

// bills
use App\Http\Controllers\BillController;
use App\Http\Controllers\RatesController;


//type
use App\Http\Controllers\CowController;
use App\Http\Controllers\BuffaloController;

//dairy
use App\Http\Controllers\DairyController;

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

Route::get('/reg', function () {
Route::get('/entry',[DairyController::class,'daily_entry']);
    return view('registery.reg');
});

Route::get('/',[CustomerController::class,'cust_view']);
Route::get('/entry',[DairyController::class,'daily_entry']);

//rates
Route::get('/rates',[RatesController::class,'create']);
