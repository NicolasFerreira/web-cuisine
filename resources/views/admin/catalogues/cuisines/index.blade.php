@extends('admin.layouts.appadmin')

@section('title')
Cuisines - index
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
<a href="{{ route('admin-catalogues-cuisines-create') }}" class="btn waves-effect waves-light">Ajouter une cuisine</a>
</div>


<section class="galerie">
	<h3> Catalogue des cuisines </h3>
	@foreach($cuisines as $cuisine)
	<div class="img-card">
		<div>
		<h3>{{ $cuisine->titre }}</h3>
		<h4>À partir de {{ $cuisine->prix }} €</h4>
	</div>
		<div class="img-box">
			<img src="/storage/{{ $cuisine->image }}">
		</div>
		<div>
		<a href="{{route('admin-catalogues-cuisines-edit',[$cuisine->id])}}" class="btn waves-effect waves-light btn-reverse">Modifier</a>
		<a href="{{route('admin-catalogues-cuisines-delete',[$cuisine->id])}}" onclick="return confirm('Etes vous sur de vouloir supprimer cette cuisine ?')" class="btn waves-effect waves-light">Supprimer</a>
	</div>
	</div>
	@endforeach

</section>




@endsection
