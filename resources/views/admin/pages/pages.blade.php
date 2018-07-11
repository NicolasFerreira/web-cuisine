@extends('admin.layouts.appadmin')

@section('title')
Pages
@endsection


@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible" role="alert">
	{{ $message }}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
@endif

<div class="pages-menu">
<a href="{{ route('admin-pages-textes-edit') }}" class="btn waves-effect waves-light">Éditer textes et images ( Accueil )</a>
<a href="{{ route('admin-pages-realisations-index') }}" class="btn waves-effect waves-light">Éditer réalisations</a>
<a href="{{ route('admin-pages-partenaires-index') }}" class="btn waves-effect waves-light">Éditer partenaires</a>
</div>


@endsection
