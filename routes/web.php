<?php

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
Route::get('users',function (){
return \App\User::paginate(50);
});

Route::get('products',function (){
    return \App\Product::with(['images'])->paginate(100);
});
Route::get('images',function (){
    return \App\Image::with(['product'])->paginate(100);
});
Route::get('cities',function (){
    return \App\City::with(['country','state'])->paginate(10);
});
Route::get('/', function () {
    return view('welcome');
});
//Route::get('units', 'DataImportController@importUnit');

Auth::routes();

Route::get('test-email', function () {
    return'hello';
})->middleware(['auth','email_verified']);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('tag', function () {
    $tag =\App\Tag::find(2);
    return $tag->products;
});
Route::get('role-user', function () {
    $user =\App\User::find(501);
    return $user->roles;
    return $tag->products;
});

Route::group( ['auth'], function () {

    Route::get('units', 'UnitController@showAdd')->name('new-unit');
});