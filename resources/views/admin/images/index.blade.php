@extends('admin.layouts.appadmin')

@section('title')
Images
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

@if ($message = Session::get('delete'))
<div class="alert alert-danger alert-dismissible" role="alert">
	{{ $message }}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
@endif

<div class="img-add-btn">
<a href="{{ route('admin-images-create') }}" class="btn waves-effect waves-light">Ajouter une image</a>
</div>


<section class="galerie">
	<h3> Ma banque d'images </h3>
	@foreach($medias as $media)
	<div class="img-card">
		<div class="img-box">
			<img src="/storage/{{ $media->path }}">
		</div>
		<a href="{{route('admin-images-delete',[$media->id])}}" onclick="return confirm('Etes vous sur de vouloir supprimer cette image ?')" class="btn waves-effect waves-light">Supprimer</a>
	</div>
	@endforeach

</section>




@endsection
