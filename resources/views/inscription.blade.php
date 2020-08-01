@extends('layout')

@section('content')

	<form style="display: flex; align-items: center;" method="POST">
		@csrf
		<input type="email" name="email" placeholder="E-mail">
		<input type="password" name="password" placeholder="password">
		<input type="password" name="password_confirmation" placeholder="password_Confirm">
		<input type="submit" name="submit">
	</form>

@endsection