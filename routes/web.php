<?php
use Illuminate\Support\Facades\Route;


Route::GET('inscription','InscriptionController@inscription');

Route::POST('inscription','InscriptionController@form');

Route::GET('/', 'UtilisateursController@liste');

Route::GET('login','ConnexionController@loginform');

Route::POST('login','ConnexionController@login');

Route::GET('/mon-compte','CompteController@accueil');

Route::GET('logout','CompteController@logout');

Route::POST('password_update','CompteController@password_update');

Route::GET('/{email}','UtilisateursController@voir');

Route::POST('/message','MessageController@nouveau');