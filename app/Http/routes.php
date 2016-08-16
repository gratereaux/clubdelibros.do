<?php
/*
|--------------------------------------------------------------------------
| Club de Libros
|--------------------------------------------------------------------------
| Rutas de acceso
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', ['uses' => 'HomeController@index', 'as' => 'HomeController.index']);

//Related to user activities
Route::group(['prefix' => 'user', 'middleware' => ['auth']], function (){
	Route::get('profile', ['uses' => 'UserController@profile', 'as' => 'UserController.profile']);
});

//Related to admin interface
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isAdmin']], function () {
	//admin pages
});