<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilisateur;

class SuivisController extends Controller
{
	public function nouveau(){
		$userQuiVeutSuivre = Auth()->user();

		$userSuivi = Utilisateur::where('email',Request('email'))->firstOrFail();

		$userQuiVeutSuivre->suivis()->attach($userSuivi);

		flash('Vous suivez désormais '.$userSuivi->email)->success();

		return back();
	}

	public function nePlusSuivre(){

		$userQuiSuit = Auth()->user();

		$userSuivi = Utilisateur::where('email',Request('email'))->firstOrFail();

		$userQuiSuit->suivis()->detach($userSuivi);

		flash('Vous ne Suivez plus '.$userSuivi->email)->success();

		return back();
	}
}
