@extends('layout')

@section('content')

<div class="columns">

	<div class="section column">

		<div class="title is-1"><h1>Les utilisateurs</h1></div>

		<ul>
			@foreach ($utilisateurs as $user)
			<li>
				<a href="/{{$user->email}}" class="link">{{$user->email}}</a>
			</li>
			@endforeach
		</ul>
	</div>

	<div class="section column">

		<div class="title is-1"><h1>Utilisateurs Suivis</h1></div>

		<ul>
			@forelse ($utilisateursSuivis as $user)
				<li>
					<a href="/{{$user->email}}" class="link">{{$user->email}}</a>
				</li>
			@empty

				<p class="is-danger">Vous ne suivez personne</p>

			@endforelse
		</ul>
	</div>

</div>

@endsection