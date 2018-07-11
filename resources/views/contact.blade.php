@extends('layouts.app')

@section('content')

{{-- Message de confirmation après envoie d'une demande de rdv --}}
@if (session('confirm'))  
    <div class="alert alert-success">
        {{ session('confirm') }}
    </div>
@endif
{{-- Fin du message  --}}

<div class="contact">
			<div class="card">
				<div class="card-body">
					<form method="POST" action="{{ action('ContactController@store') }}" >
						@csrf
						<p class="h4 text-center mb-5">Nous contactez</p>

						<div class="md-form">
							<i class="fa fa-user prefix grey-text"></i>
							<input type="text" id="materialFormContactNameEx" class="form-control" name="nom">
							<label for="materialFormContactNameEx">Votre nom</label>
						</div>

						<div class="md-form">
							<i class="fa fa-envelope prefix grey-text"></i>
							<input type="email" id="materialFormContactEmailEx" class="form-control" name="email">
							<label for="materialFormContactEmailEx">Votre Email</label>
						</div>

						<div class="md-form">
							<i class="fa fa-tag prefix grey-text"></i>
							<input type="text" id="materialFormContactSubjectEx" class="form-control" name="objet">
							<label for="materialFormContactSubjectEx">Objet</label>
						</div>

						<div class="md-form">
							<i class="fa fa-pencil prefix grey-text"></i>
							<textarea type="text" id="materialFormContactMessageEx" class="form-control md-textarea" rows="3" name="message"></textarea>
							<label for="materialFormContactMessageEx">Votre message</label>
						</div>

						<div class="text-center mt-4">
							<button class="btn" type="submit">Envoyer<i class="fa fa-paper-plane-o ml-2"></i></button>
						</div>
					</form>
				</div>
			</div>
		</div>
@endsection
