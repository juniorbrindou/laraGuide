<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('a-propos',function(){
	return view('a-propos');
});

Route::get('inscription',function(){
	return view('inscription');
});

Route::POST('inscription',function(){
	App\Utilisateur::create([
		'email'=>request('email'),
		'password'=>bcrypt(request('password'))
	]);
	
	return 'Enregistrement Effectué';
});

Route::get('/bonjour/{nom}',function (){
	$nom = request('nom');
	return view('Bonjour',compact('nom'));
});