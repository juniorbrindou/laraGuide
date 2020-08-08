@extends('layout')

@section('content')
<div class="section">

	<div class="title is-1">
		{{$utilisateur->email}}
	</div>
	@auth

	<form action="{{$utilisateur->email}}/suivis" method="POST">
		@csrf

		@if(Auth()->user()->suit($utilisateur))
			@method('DELETE')
			<input type="submit" name="suivre" class="button is-dark" value="Ne Plus Suivre">

		@else

			<input type="submit" name="suivre" class="button is-light" value="Suivre">

		@endif


	</form>
	@endauth
</div>
@if(Auth()->user())

	@if(Auth()->user()->email == Request('email'))

	<form method="POST" action="/message" class="section">
		@csrf
		<div class="field">
			<label class="label">Message</label>
			<div class="control">
				<textarea class="textarea" rows="5" name="contenu" placeholder="Votre message ici"></textarea>
			</div>
				@if($errors->has('contenu'))
					<span class="help is-danger">{{$errors->first('contenu')}}</span>
				@endif
		</div> 

		<div class="field">
			<div class="control">
				<input type="submit" class="button is-link" name="submit" value="Envoyer le message">
			</div>
		</div>


	</form>
	@endif

@endif

<h4 class="title is-4">Messages</h4>

<div class="section">
	@foreach($utilisateur->messages as $allm)
		<article class="message is-medium">
			<div class="message-header">
				<p>Medium message</p>
			</div>
			<div class="message-body">
				{{$allm->contenu}}
			</div>
		</article>
	@endforeach

</div>
@endsection