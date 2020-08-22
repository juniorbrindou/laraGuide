@extends('layout')

@section('content')
<div class="section">

	<div class="title is-1"><h1>Bienvenue {{Auth()->user()->email}}</h1></div>

</div>

<!-- formulaire de photo de profile -->
<form method="POST" action="avatar_update" class="section">
	@csrf
	<div class="columns">
		<div class="field column">
			<label class="label">Nouvel Avatar</label>
				<input class="input" type="file" name="avatar" placeholder="avatar">
				@if($errors->has('avatar'))
					<span class="help is-danger">{{$errors->first('avatar')}}</span>
				@endif
		</div>
	</div>

	<div class="field">
		<div class="control">
			<input type="submit" class="button is-link" name="submit" value="Modiffier Mot de Passe">
		</div>
	</div>
</form>


<!-- formulaire de mot de passe -->
<form method="POST" action="password_update" class="section">
	@csrf
	<div class="columns">
	<div class="field column">
		<label class="label">Password</label>
			<input class="input" type="password" name="password" placeholder="password">
			@if($errors->has('password'))
				<span class="help is-danger">{{$errors->first('password')}}</span>
			@endif
	</div>



	<div class="field column">
		<label class="label">Password confirmation</label>
			<input class="input" type="password" name="password_confirmation" placeholder="password_confirmation">
			@if($errors->has('password_confirmation'))
				<span class="help is-danger">{{$errors->first('password_confirmation')}}</span>
			@endif
	</div></div>

	<div class="field">
		<div class="control">
			<input type="submit" class="button is-link" name="submit" value="Modiffier Mot de Passe">
		</div>
	</div>
</form>

@endsection