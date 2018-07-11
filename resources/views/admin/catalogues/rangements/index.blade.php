@extends('admin.layouts.appadmin')

@section('title')
rangements - index
@endsection


@section('content')

@if ($message = Session::get('add'))
<div class="alert alert-success alert-dismissible" role="alert">
	{{ $message }}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
@endif

@if ($message = Session::get('edit'))
<div class="alert alert-success alert-dismissible" role="alert">
	{{ $message }}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
@endif

@if ($message = Session::get('delete'))
<div class="alert alert-danger alert-dismissible" role="alert">
	{{ $message }}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
@endif

<div class="cat-add-btn">
	<a href="{{ route('admin-catalogues') }}" style="color:black;"> <- Retour</a>
<a href="{{ route('admin-catalogues-rangements-create') }}" class="btn waves-effect waves-light">Ajouter un rangement</a>
</div>


<section class="galerie">
	<h3> Catalogue des rangements </h3>
	@foreach($rangements as $rangement)
	<div class="img-card">
		<div>
		<h3>{{ $rangement->titre }}</h3>
		<h4>À partir de {{ $rangement->prix }} €</h4>
	</div>
		<div class="img-box">
			<img src="/storage/{{ $rangement->image }}">
		</div>
		<div>
		<a href="{{route('admin-catalogues-rangements-edit',[$rangement->id])}}" class="btn waves-effect waves-light btn-reverse">Modifier</a>
		<a href="{{route('admin-catalogues-rangements-delete',[$rangement->id])}}" onclick="return confirm('Etes vous sur de vouloir supprimer ce rangement ?')" class="btn waves-effect waves-light">Supprimer</a>
	</div>
	</div>
	@endforeach

</section>




@endsection
