@extends('admin.layouts.appadmin')

@section('title')
Pages - partenaires - index
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
	<a href="{{ route('admin-pages-partenaires-create') }}" class="btn waves-effect waves-light">Ajouter un partenaire</a>
</div>


<section class="galerie">
	<h3> Mes partenaires </h3>
	@foreach($partenaires as $partenaire)
	<div class="img-card">
		<div class="img-box">
			<img src="/storage/{{ $partenaire->image }}">
		</div>
		<a href="{{ $partenaire->link }}">{{ $partenaire->link }}</a>

		<div>
			<a href="{{route('admin-pages-partenaires-edit',[$partenaire->id])}}" class="btn waves-effect waves-light btn-reverse">Modifier</a>
			<a href="{{route('admin-pages-partenaires-delete',[$partenaire->id])}}" onclick="return confirm('Etes vous sur de vouloir supprimer cette cuisine ?')" class="btn waves-effect waves-light">Supprimer</a>
		</div>
	</div>
	@endforeach

</section>


@endsection
