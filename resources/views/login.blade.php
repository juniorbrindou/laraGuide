@extends('layout')

@section('content')
<div class="section">

	<div class="title is-1"><h1>Login</h1></div>
	
</div>

<form method="POST" class="section">
	@csrf
	<div class="field">
		<label class="label">E-mail</label>
		<div class="control">
			<input class="input" type="email" name="email" placeholder="E-mail" value="{{ old('email')}}">
			@if($errors->has('email'))
				<span class="help is-danger">{{$errors->first('email')}}</span>
			@endif

		</div>
	</div>



	<div class="field">
		<label class="label">Password</label>
			<input class="input" type="password" name="password" placeholder="password">
			@if($errors->has('password'))
				<span class="help is-danger">{{$errors->first('password')}}</span>
			@endif
	</div>

	<div class="field">
		<div class="control">
			<input type="submit" class="button is-link" name="submit">
		</div>
	</div>


</form>

@endsection