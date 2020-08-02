<?php

namespace App\Http\Controllers;

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
}
