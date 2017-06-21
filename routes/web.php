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
    return view('auth.login');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'ProjectListController@index')->name('home');
// Route::get('/project/details/{id}', 'projectListController@details')->name('project.details');
Route::get('/project/add', 'ProjectListController@add')->name('project.add');
Route::post('/project/insert', 'ProjectListController@insert')->name('project.insert');
Route::get('/project/edit/{id}', 'ProjectListController@edit')->name('project.edit');
Route::post('/project/update/{id}', 'ProjectListController@update')->name('project.update');
Route::get('/project/delete/{id}', 'ProjectListController@delete')->name('project.delete');

Route::get('/master/index', 'MasterUserController@index')->name('master.index');
Route::get('/master/add', 'MasterUserController@add')->name('master.add');
Route::post('/master/insert', 'MasterUserController@insert')->name('master.insert');
Route::get('/master/edit/{id}', 'MasterUserController@edit')->name('master.edit');
Route::post('/master/update/{id}', 'MasterUserController@update')->name('master.update');
Route::get('/master/delete/{id}', 'MasterUserController@delete')->name('master.delete');

Route::get('/buildlist/{id}', 'BuildController@index')->name('buildlist.index');
Route::get('/buildlist/add/{id}', 'BuildController@add')->name('buildlist.add');
Route::post('/buildlist/insert/{id}', 'BuildController@insert')->name('buildlist.insert');
Route::get('/buildlist/edit/{id}', 'BuildController@edit')->name('buildlist.edit');
Route::post('/buildlist/update/{id}', 'BuildController@update')->name('buildlist.update');
Route::get('/buildlist/delete/{id}', 'BuildController@delete')->name('buildlist.delete');