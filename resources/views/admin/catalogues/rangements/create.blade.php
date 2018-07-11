@extends('admin.layouts.appadmin')

@section('title')
Cuisines - Ajouter
@endsection


@section('content')

<a href="{{ route('admin-catalogues-cuisines-index') }}" style="color:black;"> <- Retour</a>

<form method="POST" enctype="multipart/form-data" action="{{ action('RangementsController@store') }}" class="form-add">
	@csrf
	<h3>Ajout d'un rangement dans votre catalogue</h3>
	<div>
		<label for="titre">Titre : </label>
		<input type="text" name="titre" required placeholder="Titre" id="titre">
	</div>
	<div>
		<label for="prix">Prix : </label>
		<input type="text" name="prix" required placeholder="A partir de xxx €" id="prix">
	</div>
	<div>
		<label for="image">Image : </label>
		<select name="image" class="custom-select" id="image" required>
		<option disabled selected>Choix image</option>
		@foreach($medias as $media)
		<option value="{{ $media->path }}">{{ $media->path }}</option>
		@endforeach
	</select>
	</div>

	<input type="submit" class="btn waves-effect waves-light" value="AJOUTER" id="ajouter"/>
	
</form>



@endsection
