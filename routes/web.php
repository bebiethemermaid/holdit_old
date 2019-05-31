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
Route::get('/', function () {
    return view('welcome');
});
Route::get('create', function () {
    return view('create');
});
Route::get('/show', function () {
    return view('users');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/edit', function () {
    return view('edit');
});
Route::get('showname/{name}', 'HelloController@ShowHello' );
Route::get('/show', 'HelloController@show');
Route::get('showproduct/{product}', 'HelloController@resultProduct' );
