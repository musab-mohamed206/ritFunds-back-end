<?php

use App\Http\Controllers\FundPropertyController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// get all ritrunds
Route::get('ritrunds' , 'RitFundController@getFunds');
// get singel ritrunds
Route::get('ritrund/{id}' , 'RitFundController@getFund');
// get all propertes
Route::get('propertys/{id}' , 'FundPropertyController@getpropertyLocation');
// get all propertes info
Route::get('propertysinfo/{id}' , 'FundPropertyController@propertysinfo');
// get all propertes info
Route::get('propertysdetails/{id}' , 'FundPropertyController@propertysdetails');
// get all financialIndicator
Route::get('financialIndicator/{id}' , 'FinancialIndicatorController@getFinancialIndicator');
