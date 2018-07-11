@extends('admin.layouts.appadmin')

@section('title')
Pages - realisations - index
@endsection


@section('content')

<a href="{{ route('admin-pages') }}" style="color:black;"> <- Retour</a>

@if ($message = Session::get('add'))
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

<div class="img-add-btn">
<a href="{{ route('admin-pages-realisations-create') }}" class="btn waves-effect waves-light">Ajouter une réalisation</a>
</div>


<section class="galerie">
	<h3> Mes réalisations </h3>
	@foreach($realisations as $realisation)
	<div class="img-card">
		<div class="img-box">
			<img src="/storage/{{ $realisation->path }}">
		</div>
		<a href="{{route('admin-pages-realisations-delete',[$realisation->id])}}" onclick="return confirm('Etes vous sur de vouloir supprimer cette image ?')" class="btn waves-effect waves-light">Supprimer</a>
	</div>
	@endforeach

</section>


@endsection
