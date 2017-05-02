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


Route::get('/', ['as' => 'welcome', function () {
	return view('welcome');
}]);

Route::group(['prefix' => 'pages'], function()
{
	Route::get('contacto', ['as' => 'pages.contacto',function(){
return view('pages.contacto');
	}]);
		Route::get('utiles', ['as' => 'pages.utiles',function(){
return view('pages.utiles');
	}]);
			Route::get('calendario', ['as' => 'pages.calendario',function(){
return view('pages.calendario');
	}]);
				Route::get('horarios', ['as' => 'pages.horarios',function(){
return view('pages.horarios');
	}]);
				Route::get('talleres', ['as' => 'pages.talleres',function(){
return view('pages.talleres');
	}]);
				Route::get('profesores', ['as' => 'pages.profesores',function(){
return view('pages.profesores');
	}]);
				Route::get('matriculas', ['as' => 'pages.matriculas',function(){
return view('pages.matriculas');
	}]);

	
});