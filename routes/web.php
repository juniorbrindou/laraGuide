<?php
use Illuminate\Support\Facades\Route;


Route::GET('inscription','InscriptionController@inscription');

Route::POST('inscription','InscriptionController@form');

Route::GET('/', 'UtilisateursController@liste');

Route::GET('login','ConnexionController@loginform');

Route::POST('login','ConnexionController@login');

Route::group([

	'middleware'=>'App\Http\Middleware\Auth',

],function(){

	Route::GET('/mon-compte','CompteController@accueil');

	Route::POST('/message','MessageController@nouveau');

	Route::POST('password_update','CompteController@password_update');

	Route::GET('logout','CompteController@logout');

	Route::POST('{email}/suivis ','SuivisController@nouveau');
	Route::DELETE('{email}/suivis ','SuivisController@nePlusSuivre');
});

Route::GET('/{email}','UtilisateursController@voir');