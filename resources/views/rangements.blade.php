@extends('layouts.app')

@section('content')
<section class="my-5 animated wow fadeInUp " >

	<!-- Section heading -->
	<h2 class="h1-responsive font-weight-bold text-center my-5">Nos Rangements</h2>

	
	<div class="grid catalogue">
		@if(count($rangements) === 0)
		<p class="message-actualisation"> Catalogue en cours d'actualisation </p>
		@else
		@foreach($rangements as $rangement)
		<div class="item-catalogue">
			<a href="storage/{{ $rangement->image }}" data-lightbox="{{ $rangement->titre }}" >
				<div class="img-catalogue" style="background-image: url('storage/{{ $rangement->image }}');">
				</div>
			</a>
			<div class="body-catalogue">
				<h3 class="titre-catalogue">{{ $rangement->titre }}</h3>
				<p class="prix-catalogue">À partir de {{ $rangement->prix }}€</p>
			</div>

		</div>
		@endforeach
		@endif


	</div>


</section>



@endsection