<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilisateur;
use App\Message;
use Avatar;


class UtilisateursController extends Controller
{
	public function liste(){
		
	$utilisateurs = Utilisateur::all();

	$utilisateursSuivis = Auth()->user()->suivis;

	return view('utilisateurs',compact('utilisateurs','utilisateursSuivis'));
	}






	public function voir(){

		$email = request('email');

		$utilisateur = Utilisateur::where('email',$email)->firstOrFail();

		$avatar = Avatar::create('Brindou Kouadio')->getImageObject()->encode('png');
		Storage::put('avatars/avatar.png', (string) $avatar);

		return view('utilisateur',compact('utilisateur'));
	}
}
