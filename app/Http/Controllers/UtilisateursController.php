<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilisateur;
use App\Message;


class UtilisateursController extends Controller
{
	public function liste(){
		
	$utilisateurs = Utilisateur::all();

	return view('utilisateurs',compact('utilisateurs'));
	}













	public function voir(){

		$email = request()->email;

		$utilisateur = Utilisateur::where('email',$email)->first();

		$allMessages = Message::orderBy('updated_at','DESC')->where('utilisateur_id','!=',Auth()->user()->id)->get();

		$myMessages = Message::orderBy('updated_at','DESC')->where('utilisateur_id',Auth()->user()->id)->get();

		return view('utilisateur',compact('utilisateur','allMessages','myMessages'));
	}
}
