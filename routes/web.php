<?php

use Illuminate\Support\Facades\Route;

Route::view('/','welcome');

Route::get('inscription','InscriptionController@inscription');

Route::POST('inscription','InscriptionController@form');

Route::get('/utilisateurs', 'UtilisateursController@liste');