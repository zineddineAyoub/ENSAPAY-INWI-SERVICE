<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('inwi/bill/{id}','BillController@show');
Route::get('inwi/bill/batch/{id}','BillController@edit');
Route::get('inwi/bill/pay/{id}','BillController@payBill');
Route::get('inwi/bill','BillController@index');


Route::get('inwi/form/{codeCreance}','FormController@show');

Route::get('inwi/payment/{phone}/inwi2002','ClientController@show');
