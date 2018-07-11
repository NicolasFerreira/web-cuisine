@extends('admin.layouts.appadmin')

@section('title')
Images upload
@endsection


@section('content')

<a href="{{ route('admin-images') }}"> <- Retour</a>

<form method="POST" enctype="multipart/form-data" action="{{ action('MediasController@store') }}" class="form-add">
	@csrf
	<p>Appuyer sur "Parcourir" pour ajouter une image de vos dossiers puis valider sur "Ajouter"</p>
	<div>
		<input type="file" id="path" name="path" />
		<input type="submit" class="btn waves-effect waves-light" value="AJOUTER" id="ajouter"/>
	</div>
</form>



@endsection
