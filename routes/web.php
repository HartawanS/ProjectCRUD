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
Auth::routes();
Route::get('/', function () {
	//dd('test');
    return view('auth.login');//'auth.login'
});

Route::get('/error/{err}', 'HomeController@error')->name('error.forbidden');
// Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    //

	// Route::get('/logout', 'HomeController@logout')->name('logout');
	Route::get('/logout', 'Auth\LoginController@logout');
	// Route::get('/home', 'HomeController@index')->name('home');

	Route::get('/home', 'ProjectListController@index')->name('home');
	// Route::get('/project/details/{id}', 'projectListController@details')->name('project.details');
	Route::get('/project/add', 'ProjectListController@add')->name('project.add');
	Route::post('/project/insert', 'ProjectListController@insert')->name('project.insert');
	Route::get('/project/edit/{id}', 'ProjectListController@edit')->name('project.edit');
	Route::post('/project/update/{id}', 'ProjectListController@update')->name('project.update');
	Route::get('/project/delete/{id}', 'ProjectListController@delete')->name('project.delete');

	Route::get('/master/index', 'MasterUserController@index')->name('master.index');
	Route::get('/master/details/{id}', 'MasterUserController@detail')->name('master.detail');
	Route::get('/master/add', 'MasterUserController@add')->name('master.add');
	Route::post('/master/insert', 'MasterUserController@insert')->name('master.insert');
	Route::get('/master/edit/{id}', 'MasterUserController@edit')->name('master.edit');
	Route::post('/master/update/{id}', 'MasterUserController@update')->name('master.update');
	Route::get('/master/delete/{id}', 'MasterUserController@delete')->name('master.delete');

	

	Route::get('/buildlist/{id}', 'BuildController@index')->name('buildlist.index')->middleware('verified:'.request()->segment(2) );
	Route::get('/buildlist/details/{id}', 'BuildController@detail')->name('buildlist.detail')->middleware('verified:'.request()->segment(3) );
	Route::get('/buildlist/add/{id}', 'BuildController@add')->name('buildlist.add')->middleware('verified:'.request()->segment(3) );
	Route::post('/buildlist/insert/{id}', 'BuildController@insert')->name('buildlist.insert')->middleware('verified:'.request()->segment(3) );
	Route::get('/buildlist/edit/{id}', 'BuildController@edit')->name('buildlist.edit')->middleware('verified:'.request()->segment(3) );
	Route::post('/buildlist/update/{id}', 'BuildController@update')->name('buildlist.update')->middleware('verified:'.request()->segment(3) );
	Route::get('/buildlist/delete/{id}', 'BuildController@delete')->name('buildlist.delete');

	Route::get('/userlist/{id}', 'UsersController@index')->name('userlist.index')->middleware('verified:'.request()->segment(2) );
	Route::get('/userlist/details/{id}', 'UsersController@detail')->name('userlist.detail');
	Route::get('/userlist/add/{id}', 'UsersController@add')->name('userlist.add')->middleware('verified:'.request()->segment(3) );
	Route::post('/userlist/insert/{id}', 'UsersController@insert')->name('userlist.insert')->middleware('verified:'.request()->segment(3) );
	Route::get('/userlist/edit/{id}', 'UsersController@edit')->name('userlist.edit')->middleware('verified:'.request()->segment(3) );
	Route::post('/userlist/update/{id}', 'UsersController@update')->name('userlist.update')->middleware('verified:'.request()->segment(3) );
	Route::get('/userlist/delete/{id}', 'UsersController@delete')->name('userlist.delete');

	Route::get('/changepassword', 'ChangeController@change')->name('changepassword');
	Route::post('/changepassword/{id}', 'ChangeController@update')->name('changepassword.update');

	Route::get('/changeprofile', 'ChangeController@change_profile')->name('changeprofile');
	Route::post('/changeprofile/{id}', 'ChangeController@update_profile')->name('changeprofile.update');
});

