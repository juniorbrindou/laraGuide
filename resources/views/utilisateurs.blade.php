@extends('layout')

@section('content')
<div class="title m-b-md">
	Les utilisateurs
</div>
	<ul>
		@foreach ($utilisateurs as $user)
		<li>{{$user->email}}</li>
		@endforeach
	</ul>

@endsection