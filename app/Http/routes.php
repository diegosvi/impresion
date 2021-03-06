<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('home', 'WelcomeController@index');

Route::get('/', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


resource ('areas','AreaController');
resource ('modelocartuchos','ModeloCartuchoController');
resource ('cartuchos','CartuchoController');
resource ('modeloimpresoras','ModeloImpresoraController');
resource ('oficinas','OficinaController');
resource ('impresoras','ImpresoraController');
resource ('asignacioncartuchos','AsignacionCartuchoController');
resource ('asignacionimpresoras','AsignacionImpresoraController');
resource ('recargacartuchos','RecargaCartuchoController');
resource ('impresions','ImpresionController');