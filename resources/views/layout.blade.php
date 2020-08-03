<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Laravel</title>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
	</head>
	<body>
		<nav class="navbar is-light" role="navigation" aria-label="main navigation">
			<div class="navbar-brand">
				<a class="navbar-item" href="/">
					<img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
				</a>

				<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
				</a>
			</div>

			<div class="navbar-menu">
				<div class="navbar-start">

					@include('partials.navbar-item',['lien'=>'/','texte'=>'Accueil'])

					@if(Auth()->check())

					@include('partials.navbar-item',['lien'=>Auth()->user()->email,'texte'=>Auth()->user()->email])

					@endif
				</div>
				<div class="navbar-end">
					<div class="navbar-item">
						<div class="buttons">
						@if(Auth()->guest())

							@include('partials.navbar-item-dark',['lien'=>'inscription','texte'=>"S'inscrire"])

							@include('partials.navbar-item-dark',['lien'=>'login','texte'=>'Connexion'])

						@else
							@include('partials.navbar-item-dark',['lien'=>'mon-compte','texte'=>'Mon compte'])

							<a class="button is-light" href="logout">Deconnexion</a>

						@endif
						</div>
					</div>
				</div>
			</div>
		</nav>



		<div class="container">

			@include('flash::message')

			@yield('content')

		</div>
		
		<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
	</body>
</html>
