@extends('layouts.app')

@section('content')
<section class="my-5 animated wow fadeInUp " >

	<!-- Section heading -->
	<h2 class="h1-responsive font-weight-bold text-center my-5">Nos Salles de bain</h2>

	<div class="grid catalogue">
		@if(count($sdbs) === 0)
		<p class="message-actualisation"> Catalogue en cours d'actualisation </p>
		@else
		@foreach($sdbs as $sdb)
		<div class="item-catalogue">
			<a href="storage/{{ $sdb->image }}" data-lightbox="{{ $sdb->titre }}" >
				<div class="img-catalogue" style="background-image: url('storage/{{ $sdb->image }}');">
				</div>
			</a>
			<div class="body-catalogue">
				<h3 class="titre-catalogue">{{ $sdb->titre }}</h3>
				<p class="prix-catalogue">À partir de {{ $sdb->prix }}€</p>
			</div>

		</div>
		@endforeach
		@endif
	</div>


</section>
@endsection