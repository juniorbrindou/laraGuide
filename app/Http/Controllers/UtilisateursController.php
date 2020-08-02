<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilisateur;


class UtilisateursController extends Controller
{
    public function liste(){
    	
    $utilisateurs = Utilisateur::all();

	return view('utilisateurs',compact('utilisateurs'));
    }


    public function voir(){
    	$email = request()->email;
    	$utilisateur = Utilisateur::where('email',$email)->first();
    	return view('utilisateur',compact('utilisateur'));
    }
}
