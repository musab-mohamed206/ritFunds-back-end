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
//Auth::routes();



Route::get('dashbord', 'DashbordController@index')->name('dashbord')->middleware('auth');

Route::resource('dashbord', 'DashbordController');
Route::resource('FundProperty', 'FundPropertyController')->middleware('auth');
Route::resource('RitFund', 'RitFundController')->middleware('auth');
Route::resource('FinancialIndicator', 'FinancialIndicatorController')->middleware('auth');
Route::get('indicators/index/{id}', 'FinancialIndicatorController@index')->middleware('auth');
Route::get('indicators/create/{id}', 'FinancialIndicatorController@create')->middleware('auth');

//Route::get('/dashbord/FundProperty/create', 'FundPropertyController@create')->name('new-property');

Auth::routes();

//Route::get('/', 'HomeController@index')->name('home');
Route::resource('FinancialIndicator', 'FinancialIndicatorController')->middleware('auth');

Route::get('/', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});
