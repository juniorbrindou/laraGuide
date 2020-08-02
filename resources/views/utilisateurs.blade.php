@extends('layout')

@section('content')

<div class="section">

	<div class="title is-1"><h1>Les utilisateurs</h1></div>

	<ul>
		@foreach ($utilisateurs as $user)
		<li>
			<a href="/{{$user->email}}" class="link">{{$user->email}}</a>
		</li>
		@endforeach
	</ul>
</div>

@endsection