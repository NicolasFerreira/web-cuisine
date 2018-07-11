@extends('layouts.app')

@section('content')

<h2>RDV</h2>

{{-- Message de confirmation après envoie d'une demande de rdv --}}
@if (session('confirm'))  
    <div class="alert alert-success">
        {{ session('confirm') }}
    </div>
@endif
{{-- Fin du message  --}}

<form method="POST" action="{{ action('RdvController@store') }}" class="rdv__form">
	@csrf
	<div class="div_dso">

		<div class="nouveau-dso form-group">
			<label for="date_demande">Date 1ère choix</label>
			<input type="date" class="form-control" id="date_demande" name="date_1" placeholder="" value="" required>

		</div>
		<div class="nouveau-dso form-group">
			<label for="date_rep">Horaires 1 er choix</label>

			<select class="mdb-select" name="horaires_1" required>
				<option value="" disabled selected>Choix d'une tranche horaire</option>
				<option value="10-12h">10-12h</option>
				<option value="14-16h">14-16h</option>
				<option value="16-18h">16-18h</option>
				<option value="Autre">Autre</option>
			</select>

		</div>
		<div class="nouveau-dso form-group">
			<label for="date_envoi">Date 2 ème choix</label>
			<input type="date" class="form-control" id="date_envoi" name="date_2" placeholder="" value="" required>
		</div>
		<div class="nouveau-dso form-group">
			<label for="date_livraison">Horaires 2eme choix</label>
			<select class="mdb-select" name="horaires_2" required>
				<option value="" disabled selected>Choix d'une tranche horaire</option>
				<option value="10-12h">10-12h</option>
				<option value="14-16h">14-16h</option>
				<option value="16-18h">16-18h</option>
				<option value="Autre">Autre</option>
			</select>
		</div>

		<div class="nouveau-dso form-group">
			<label for="date_livraison">Nom</label>
			<input type="text" class="form-control" id="date_livraison" name="nom" placeholder="" value="" required>
		</div>

		<div class="nouveau-dso form-group">
			<label for="date_livraison">Prenom</label>
			<input type="text" class="form-control" id="date_livraison" name="prenom" placeholder="" value="" required>
		</div>

		<div class="nouveau-dso form-group">
			<label for="date_livraison">Email</label>
			<input type="email" class="form-control" id="date_livraison" name="email" placeholder="" value="" required>
		</div>
		<div class="nouveau-dso form-group">
			<label for="date_livraison">Numéro</label>
			<input type="text" class="form-control" id="date_livraison" name="numero" placeholder="" maxlength="10" required>
		</div>

		<div class="nouveau-dso form-group">
			<label for="date_livraison">Commentaires</label>
			<input type="text" class="form-control" id="date_livraison" name="commentaires" placeholder="" value="" required>
		</div>

		<button class="btn btn-warning" type="submit">Continuer</button>

	</div>
</form>

@endsection
