@extends('layout')

@section('content')

	<form style="display: flex; align-items: center;" method="POST">
		<input type="email" name="email" placeholder="E-mail">
		<input type="password" name="password" placeholder="password">
		<input type="password" name="password_confirm" placeholder="password_Confirm">
		<input type="submit" name="submit">
	</form>

@endsection