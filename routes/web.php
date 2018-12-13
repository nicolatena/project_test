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

Route::get('/simple', function () {
    return view('belajar1');
});

Route::get('user/{id}/{name?}', function ($id, $name ='Adissa') {
    return view('belajar1', compact('id', 'name'));
});

// Route::get('user/{name?}', function ($name = 'Adissa') {
//     return view('belajar1', compact('name'));
// });

Route::get('/belajar', 'BelajarController@index');
Route::get('/belajar/html', 'BelajarController@getPage');
Route::get('/one-to-one', 'BelajarController@getOne');