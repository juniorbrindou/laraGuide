<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
class MessageController extends Controller
{
    public function nouveau(){
    	if (Auth()->guest()) {

    		flash('Vous devez vous connecter pour acceder à cette page')->error();

    		return redirect('login');
    	}
    	request()->validate([
    		'contenu'=>['required','min:15']
    	]);

    	Message::create([

    		'utilisateur_id'=>Auth()->user()->id,

    		'contenu'=>request('contenu')
    	]);

    	flash('Message Envoyé.')->success();
    	return back();
    }
}
