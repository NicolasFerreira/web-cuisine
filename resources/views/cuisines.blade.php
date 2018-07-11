@extends('layouts.app')

@section('content')
<section class="my-5 animated wow fadeInUp " >

	<!-- Section heading -->
	<h2 class="h1-responsive font-weight-bold text-center my-5">Nos Cuisines</h2>

	<div class="grid catalogue">
		@if(count($cuisines) === 0)
		<p class="message-actualisation"> Catalogue en cours d'actualisation </p>
		@else
		@foreach($cuisines as $cuisine)
		<div class="item-catalogue">
			<a href="storage/{{ $cuisine->image }}" data-lightbox="{{ $cuisine->titre }}" >
				<div class="img-catalogue" style="background-image: url('storage/{{ $cuisine->image }}');">
				</div>
			</a>
			<div class="body-catalogue">
				<h3 class="titre-catalogue">{{ $cuisine->titre }}</h3>
				<p class="prix-catalogue">À partir de {{ $cuisine->prix }}€</p>
			</div>

		</div>
		@endforeach
		@endif


	</div>


</section>
@endsection