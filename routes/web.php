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
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
//Registration Routes...
Route::get('registro', 'Auth\RegisterController@showRegistrationForm')->name('registro');
Route::post('registro', 'Auth\RegisterController@register');

//	AGRUPAMOS LAS URL QUE COMPARTEN EL MISMO PREFIJO
Route::middleware(['auth'])->group(function () {
	Route::group(['prefix' => 'intranet'], function(){

		Route::get('/maestros', function(){ return view('teachers.index'); })->name('maestros');
		Route::get('/federados', function() { return view('students.index'); })->name('federados');
		Route::get('/configuracion', function() { return view('settings'); })->name('configuracion');

		//	RUTA PARA TODAS LAS PÁGINAS QUE COMPARTE EL MISMO PREGIJO CONFIGURACION
		Route::group(['prefix' => 'configuracion'], function(){
			Route::get('/roles', function() { return view('configuracion.roles.index'); })->name('roles');

			// RUTA PARA ROLES
			Route::get('/roles/nuevo', function(){ return view('configuracion.roles.new'); })->name('roles.nuevo');
			Route::get('/roles/editar/{rol?}', function(){ return view('configuracion.roles.edit'); })->name('roles.edit');
			Route::get('/roles/eliminar/{rol?}', function(){ return view('configuracion.roles.delete'); })->name('roles.delete');
	
		});

		//	RUTA PARA TODAS LAS PÁGINAS QUE COMPARTE EL MISMO PREGIJO MAESTROS
		Route::group(['prefix' => 'maestros'], function(){
			Route::get('/nuevo', function(){ return view('teachers.new'); })->name('maestros.nuevo');
			Route::get('/ver/{teachers?}', function(){ return view('teachers.show'); })->name('maestros.ver');
			Route::get('/editar/{teachers?}', function(){ return view('teachers.edit'); })->name('maestros.editar');
			Route::get('/eliminar/{teachers?}', function(){ return view('teachers.delete'); })->name('maestros.eliminar');
		});

		Route::group(['prefix' => 'federados'], function(){
			Route::get('/nuevo', function(){ return view('students.new'); })->name('federados.nuevo');
			Route::get('/ver/{students?}', function(){ return view('students.show'); })->name('federados.ver');
			Route::get('/editar/{students?}', function(){ return view('students.edit'); })->name('federados.editar');
			Route::get('/eliminar/{students?}', function(){ return view('students.delete'); })->name('federados.eliminar');
		});
		
	});
});



Route::get('/', function () {
    return view('welcome');
});

Route::get('/intranet', function () {
	return view('index');
})->middleware('auth');