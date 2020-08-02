<?php
use Illuminate\Support\Facades\Route;

Route::view('/','welcome');

Route::GET('inscription','InscriptionController@inscription');

Route::POST('inscription','InscriptionController@form');

Route::GET('/utilisateurs', 'UtilisateursController@liste');

Route::GET('login','ConnexionController@loginform');

Route::POST('login','ConnexionController@login');

Route::GET('/mon-compte','CompteController@accueil');

Route::GET('logout','CompteController@logout');