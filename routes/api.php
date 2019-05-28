<?php

use Illuminate\Http\Request;

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
//Route::get('user', 'UserController@index');
Route::get('countries', 'CountryController@index');
Route::get('countries/{country}', 'CountryController@show');
Route::post('countries', 'CountryController@store');
Route::put('countries/{country}', 'CountryController@update');
Route::delete('countries/{country}', 'CountryController@destroy');


//Department Route/end-point
Route::get('departments', 'DepartmentController@index');
Route::get('departments/{department}', 'DepartmentController@show');
Route::post('departments', 'DepartmentController@store');
Route::put('departments/{department}', 'DepartmentController@update');
Route::delete('departments/{department}', 'DepartmentController@destroy');


//State Route/end-point
Route::get('states', 'StateController@index');
Route::get('states/{state}', 'StateController@show');
Route::post('states', 'StateController@store');
Route::put('states/{state}', 'StateController@update');
Route::delete('states/{state}', 'StateController@destroy');