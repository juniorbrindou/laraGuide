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
					<a class="navbar-item" href="/">Home</a>
				</div>

				<div class="navbar-end">
					<div class="navbar-item">
						<div class="buttons">
							<a class="button is-primary" href="inscription"><strong>S'inscrire</strong></a>
							<a class="button is-light" href="login">Connexion</a>
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
