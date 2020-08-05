<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilisateur;

class SuivisController extends Controller
{
	public function nouveau(){
		$userQuiVeutSuivre = Auth()->user();

		$userSuivi = Utilisateur::where('email',Request('email'))->firstOrFail();

		flash('Vous suivez désormais '.$userSuivi->email)->success();
		return back();
	}
}
