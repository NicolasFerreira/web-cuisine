@extends('admin.layouts.appadmin')

@section('title')
Salles de bain - index
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
<a href="{{ route('admin-catalogues-sdb-create') }}" class="btn waves-effect waves-light">Ajouter une salle de bain</a>
</div>


<section class="galerie">
	<h3> Catalogue des salles de bains </h3>
	@foreach($sdbs as $sdb)
	<div class="img-card">
		<div>
		<h3>{{ $sdb->titre }}</h3>
		<h4>À partir de {{ $sdb->prix }} €</h4>
	</div>
		<div class="img-box">
			<img src="/storage/{{ $sdb->image }}">
		</div>
		<div>
		<a href="{{route('admin-catalogues-sdb-edit',[$sdb->id])}}" class="btn waves-effect waves-light btn-reverse">Modifier</a>
		<a href="{{route('admin-catalogues-sdb-delete',[$sdb->id])}}" onclick="return confirm('Etes vous sur de vouloir supprimer cette cuisine ?')" class="btn waves-effect waves-light">Supprimer</a>
	</div>
	</div>
	@endforeach

</section>




@endsection
