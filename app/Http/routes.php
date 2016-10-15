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
    Route::resource('profile','UserController');
    Route::get('/profile/deletephone/{id?}', ['uses' => 'UserController@deletephone', 'as' => 'user.profile.deletephone']);

    Route::get('/profile/{id}/destroy', [
        'uses' 	=> 	'UserController@destroy',
        'as'	=>	'user.profile.destroy'
    ]);
});

//Related to books activities
Route::resource('book','BookController');



//Related to admin interface
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isAdmin']], function () {
	//admin pages
});

//Social routes

Route::get('social/{provider?}', 'SocialController@getSocialAuth');
Route::get('social/callback/{provider?}', 'SocialController@getSocialAuthCallback');