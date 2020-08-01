@extends('layout')

@section('content')
<h1>Les utilisateurs</h1>
	<ul>
		@foreach ($utilisateurs as $user)
		<li>{{$user->email}}</li>
		@endforeach
	</ul>

@endsection