<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DairyController;

// Customer
use App\Http\Controllers\CustomerController;

// bills
use App\Http\Controllers\BillController;
use App\Http\Controllers\RatesController;


//type
use App\Http\Controllers\CowController;
use App\Http\Controllers\BuffaloController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/store',[DairyController::class,'store']);
Route::get('/drop_type/{Cust_id}',[DairyController::class,'drop_type']);

// registration of customer

Route::post('/reg_name',[CustomerController::class,'cust_reg']);
Route::get('/try',[CustomerController::class,'try']);

//billing
Route::post('/bill',[BillController::class,'create']);

//rates
Route::post('/rate',[RatesController::class,'store']);
