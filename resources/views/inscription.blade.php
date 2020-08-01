@extends('layout')

@section('content')
<div class="title m-b-md">
	Formulaire
</div>
	<form method="POST">
		@csrf
		<p><input type="email" name="email" placeholder="E-mail" value="{{ old('email')}}"></p>
			@if($errors->has('email'))
				<span class="alert-danger">{{$errors->first('email')}}</span>
			@endif
		<p><input type="password" name="password" placeholder="password"></p>
			@if($errors->has('password'))
				<span class="alert-danger">{{$errors->first('password')}}</span>
			@endif
		<p><input type="password" name="password_confirmation" placeholder="password_Confirm"></p>
			@if($errors->has('password_confirmation'))
				<span class="alert-danger">{{$errors->first('password_confirmation')}}</span>
			@endif
		<p><input type="submit" name="submit"></p>
	</form>

@endsection