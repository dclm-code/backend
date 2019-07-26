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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Registration route (endpoint)
Route::post('register', 'Auth\RegisterController@register');

//Login route (endpoint)
Route::post('login', 'Auth\LoginController@login');

//Password reset endpoint
Route::post('password/email', 'Auth\ForgotPasswordController@getResetToken');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

//return the list of all registered country
Route::get('countries', 'CountryController@index');

//return the list of all available departments
Route::get('departments', 'DepartmentController@index');

//return the list of all available states
Route::get('states', 'StateController@index');

//return the list of all available grade levels
Route::get('grade_levels', 'GradeLevelController@index');

//return the list of all available group/lga
Route::get('group_lgas', 'GroupLgaController@index');

//return the list of all available regions
Route::get('regions', 'RegionController@index');

//return the list of all available qualification
Route::get('qualifications', 'QualificationController@index');

//return the sections of all available sections
Route::get('sections', 'SectionController@index');

Route::group(['middleware' => 'auth:api'], function () {

//Staff/Users End-points
//Route::post('users', 'RegisterController@create');
Route::get('users', 'UserController@index');
Route::get('users/{user}', 'UserController@show');
Route::put('users/{user}', 'UserController@update');
Route::delete('users/{user}', 'UserController@destroy');
//Route::post('users/signin', 'UserController@signin');


//Countries End-points
Route::get('countries/{country}', 'CountryController@show');
Route::post('countries', 'CountryController@store');
Route::put('countries/{country}', 'CountryController@update');
Route::delete('countries/{country}', 'CountryController@destroy');


//Department Route/end-point
Route::get('departments/{department}', 'DepartmentController@show');
Route::post('departments', 'DepartmentController@store');
Route::put('departments/{department}', 'DepartmentController@update');
Route::delete('departments/{department}', 'DepartmentController@destroy');


//State Route/end-point
Route::get('states/{state}', 'StateController@show');
Route::post('states', 'StateController@store');
Route::put('states/{state}', 'StateController@update');
Route::delete('states/{state}', 'StateController@destroy');


//Group/Lgas Endpoints
Route::get('group_lgas/{grouplga}', 'GroupLgaController@show');
Route::post('group_lgas', 'GroupLgaController@store');
Route::put('group_lgas/{grouplga}', 'GroupLgaController@update');
Route::delete('group_lgas/{grouplga}', 'GroupLgaController@destroy');


//Regions Endpoints
Route::get('regions/{region}', 'RegionController@show');
Route::post('regions', 'RegionController@store');
Route::put('regions/{region}', 'RegionController@update');
Route::delete('regions/{region}', 'RegionController@destroy');


//Qualification Endpoints
Route::get("qualifications/{qualification}" , "QualificationController@show");
Route::post('qualifications', 'QualificationController@store');
Route::put('qualifications/{qualification}', 'QualificationController@update');
Route::delete('qualifications/{qualification}', 'QualificationController@destroy');


//Section Endpoints
Route::get('sections/{section}' , "SectionController@show");
Route::post('sections', 'SectionController@store');
Route::put('sections/{section}', 'SectionController@update');
Route::delete('sections/{section}', 'SectionController@destroy');

//Staff Grade Level endpoints
Route::get('grade_levels/{gradelevel}', 'GradeLevelController@show');
Route::post('grade_levels', 'GradeLevelController@store');
Route::put('grade_levels/{gradelevel}', 'GradeLevelController@update');
Route::delete('grade_levels/{gradelevel}', 'GradeLevelController@destroy');

//Inter-office memos/messages endpoints 
Route::get('messages', 'MessageController@index');
Route::get('messages/{message}', 'MessageController@show');
Route::post('messages', 'MessageController@store');

//Logout route (endpoint)
Route::post('logout', 'Auth\LoginController@logout');
});