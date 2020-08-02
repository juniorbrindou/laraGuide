<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function accueil(){

    	if (Auth()->guest()) {

    		flash('Vous devez vous connecter pour acceder à cette page')->error();

    		return redirect('login');
    	}

    	return view('mon-compte');
    }

    public function logout(){

    	Auth()->logout();
    	
    	flash('Vous etes déconnecté avec Succes')->success();

    	return redirect('/');
    }

    public function password_update(){

    	if (Auth::check()) {

    		Request()->validate([
    			'password'=>['required','min:4','confirmed'],
    			'password_confirmation'=>['required']
    		]);

    		Auth::user()->update(['password'=>bcrypt(request()->password)]);

    		flash('Mot de passe Modiffié avec success!')->success();

    		return back();

    	}else{
    		return redirect('login');
    	}
    }
}