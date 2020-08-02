@extends('layout')

@section('content')

<div class="section">

	<div class="title">
		Les utilisateurs
	</div>
	<ul>
		@foreach ($utilisateurs as $user)
		<li>{{$user->email}}</li>
		@endforeach
	</ul>
</div>

@endsection