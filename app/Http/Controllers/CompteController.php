<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function accueil(){

    	if (Auth()->guest()) {
    		return redirect('login')->withErrors([
    			'name'=>'Vous devez etre connecté pour acceder à cette page'
    		]);
    	}

    	return view('mon-compte');
    }
}
