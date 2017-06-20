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

Route::get('/home', 'projectListController@index')->name('home');
// Route::get('/project/details/{id}', 'projectListController@details')->name('project.details');
Route::get('/project/add', 'projectListController@add')->name('project.add');
Route::post('/project/insert', 'projectListController@insert')->name('project.insert');
Route::get('/project/edit/{id}', 'projectListController@edit')->name('project.edit');
Route::post('/project/update/{id}', 'projectListController@update')->name('project.update');
Route::get('/project/delete/{id}', 'projectListController@delete')->name('project.delete');

Route::get('/project/buildlist/{id}', 'buildListController@buildlist')->name('project.buildlist');