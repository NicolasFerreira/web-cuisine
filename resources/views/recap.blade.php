@extends('layouts.app')

@section('content')

<h2>Récaputilatif</h2>

@foreach ($rdv as $rdv)
<form method="POST" action="{{ action('RdvController@confirm', [$idRdv]) }}" class="rdv__form">
	@csrf
	



	<di<div class="card">
		<div class="card-body">

			<h4 class="card-title">Récapitulatif de votre demande de RDV</h4>
			<!-- Text -->
			<h4 class="card-title">{{ $rdv->nom }} {{ $rdv->prenom }}</h4>
            
            <p class="card-text">Date 1er choix : {{ $rdv->date_1 }} </p>
            <p class="card-text">Horaires 1 : {{ $rdv->horaires_1 }}</p>

            <p class="card-text">Date 2ème choix : {{ $rdv->date_2 }} </p>
            <p class="card-text">Horaires 2 : {{ $rdv->horaires_2 }}</p>

            <p class="card-text">Email : {{ $rdv->email }}</p>
            <p class="card-text">Tel : {{ $rdv->numero }}</p>

            <p class="card-text">Commentaires : {{ $rdv->commentaires }}</p>
			<!-- Button -->
			<a class="btn btn-blue-grey" href="{{ route('rdv') }}">Retour</a>
			<button class="btn btn-warning" type="submit">Confirmer</button>
		</div>

	</div>


	

	
</form>

@endforeach

@endsection
