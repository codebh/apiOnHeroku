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
Route::get('categories', 'Api\CategoryController@index');
Route::get('products', 'Api\ProductController@index');
Route::get('products/{id}', 'Api\ProductController@show');
Route::get('tags', 'Api\TagController@index');
Route::get('tags/{id}', 'Api\TagController@show');

Route::get('countries', 'Api\CountryController@index');
Route::get('countries/{id}/cities', 'Api\CountryController@showCities');
Route::get('countries/{id}/states', 'Api\CountryController@showStates');

Route::post('auth/register', 'Api\AuthController@register');
Route::post('auth/login', 'Api\AuthController@login');



//after auth
Route::group(['auth:api'], function () {


});

//Route::middleware('auth:api')->get('/products', function (Request $request) {
//
//    return \App\Product::all();
//});
