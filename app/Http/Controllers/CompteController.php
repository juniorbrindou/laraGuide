<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CompteController extends Controller
{


	public function accueil(){

		return view('mon-compte');
	}





	public function logout(){

		Auth()->logout();
		
		flash('Vous etes déconnecté avec Succes')->success();

		return redirect('/');
	}






	public function password_update(){

		Request()->validate([
			'password'=>['required','min:4','confirmed'],
			'password_confirmation'=>['required']
		]);

		Auth::user()->update(['password'=>bcrypt(request()->password)]);

		flash('Mot de passe Modiffié avec success!')->success();

		return back();
	}


	public function avatar_update(){
		request()->validate([
			'avatar'=>['required','image']
		]);

		$path = request('avatar')->store('avatars','public');

		Auth()->user()->update([
			'avatar'=>$path
		]);
		flash('Avatar Modiffié avec succes!')->success();
		return back();
	}


}