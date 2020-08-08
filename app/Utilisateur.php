<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class Utilisateur extends Model implements Authenticatable
{
	use BasicAuthenticatable;

	protected $fillable = ['email','password'];

	public function messages(){

		return $this->hasMany('App\Message')->latest();
	}

	public function suivis(){

		return $this->belongsToMany('App\Utilisateur','suivis','suiveur_id','suivi_id');

	}

	public function suit($utilisateur){


		return $this->suivis()->where('suivi_id',$utilisateur->id)->exists();

	}

}