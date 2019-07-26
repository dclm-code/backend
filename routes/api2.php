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
//Countries End-point
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


//GroupLgas Endpoints
Route::get('group_lgas', 'GroupLgaController@index');
Route::get('group_lgas/{grouplga}', 'GroupLgaController@show');
Route::post('group_lgas', 'GroupLgaController@store');
Route::put('group_lgas/{grouplga}', 'GroupLgaController@update');
Route::delete('group_lgas/{grouplga}', 'GroupLgaController@destroy');


//Regions Endpoints
Route::get('regions', 'RegionController@index');
Route::get('regions/{region}', 'RegionController@show');
Route::post('regions', 'RegionController@store');
Route::put('regions/{region}', 'RegionController@update');
Route::delete('regions/{region}', 'RegionController@destroy');


//Qualification Endpoints
Route::get('qualifications', 'QualificationController@index');
Route::get("qualifications/{qualification}" , "QualificationController@show");
Route::post('qualifications', 'QualificationController@store');
Route::put('qualifications/{qualification}', 'QualificationController@update');
Route::delete('qualifications/{qualification}', 'QualificationController@destroy');


//Section Endpoints
Route::get('sections', 'SectionController@index');
Route::get('sections/{section}' , "SectionController@show");
Route::post('sections', 'SectionController@store');
Route::put('sections/{section}', 'SectionController@update');
Route::delete('sections/{section}', 'SectionController@destroy');


//Grade level Endpoint
Route::get('grade_levels', 'GradeLevelController@index');
Route::get('grade_levels/{gradelevel}', 'GradeLevelController@show');
Route::post('grade_levels', 'GradeLevelController@store');
Route::put('grade_levels/{gradelevel}', 'GradeLevelController@update');
Route::delete('grade_levels/{gradelevel}', 'GradeLevelController@destroy');

//Message Endpoint
Route::get('messages', 'MessageController@index');
Route::get('messages/{message}', 'MessageController@show');
Route::post('messages', 'MessageController@store');
Route::put('messages/{message}', 'MessageController@update');
Route::delete('messages/{message}', 'MessageController@destroy');

//Users Endpoint
Route::get('users', 'UserController@index');
Route::get('users/{user}', 'UserController@show');
Route::post('users', 'UserController@store');
Route::put('users/{user}', 'UserController@update');
Route::delete('users/{user}', 'UserController@destroy');

//leaveform Endpoint
Route::get('leaveforms', 'LeaveFormControllers@index');
Route::get('leaveforms/{leaveform}', 'LeaveFormControllers@show');
Route::post('leaveforms', 'LeaveFormControllers@store');
Route::put('leaveforms/{leaveform}', 'LeaveFormControllers@update');
Route::delete('leaveforms/{leaveform}', 'LeaveFormControllers@destroy');

//Fuel Endpoint
Route::get('fuels', 'FuelController@index');
Route::get('fuels/{fuel}', 'FuelController@show');
Route::post('fuels', 'FuelController@store');
Route::put('fuels/{fuel}', 'FuelController@update');
Route::delete('fuels/{fuel}', 'FuelController@destroy');
