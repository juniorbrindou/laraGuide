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
	request()->validate([
		'email'=>['required','email'],
		'password'=>['required','confirmed'],
		'password_confirmation'=>['required','min:4']
	]);
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

Route::get('/utilisateurs',function(){
	$utilisateurs = App\Utilisateur::all();
	return view('utilisateurs',compact('utilisateurs'));
});