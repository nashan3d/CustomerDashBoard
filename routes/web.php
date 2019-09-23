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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

// create a dashboard controler


Route::get('/customers','DashBoardController@index');

Route::get('/customers/detail','DashBoardController@detail'); //Ajax method

Route::get('/customers/view','DashBoardController@view'); // can be customers/view

Route::post('/customers/create','DashBoardController@store'); // crud 

Route::patch('/customers/{customer}/edit','DashBoardController@update'); // customers/edit/{}

Route::delete('/customers/delete/{customer}','DashBoardController@destroy'); // delete, 



//Route::get('/home', 'HomeController@index')->name('home');  


