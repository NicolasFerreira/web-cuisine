@extends('layouts.app')

@section('content')
<div class="titre-box  animated wow fadeIn" style="background-image: url('storage/{{ $image->content  }}'); ">
	<div class="titre">
		<h1 class="h1-responsive"><span>{{ $titre1->content }} </span> {{ $titre2->content }} </h1>
		<h2 class="h2-responsive">{{ $soustitre->content }} </h2>
	</div>
</div>


<section class="my-5 animated wow fadeIn " >

	<!-- Section heading -->
	<h2 class="h1-responsive font-weight-bold text-center my-5">{{ $section_1_titre->content }} </h2>


	<div class="grid" >
		<div class="card">
			<div><img src="{{ $card_1_img->content }} "  >
				<h2 class="font-weight-bold mb-3">{{ $card_1_titre->content }} </h2>
			</div>
			<p>{{ $card_1_txt->content }} </p>
			<a href="{{ route('cuisines') }}" class="btn waves-effect waves-light">{{ $card_1_btn->content }} </a>
		</div>

		<div class="card">
			<div><img src="{{ $card_2_img->content }}">
				<h2 class="font-weight-bold mb-3">{{ $card_2_titre->content }}</h2>
			</div>
			<p>{{ $card_2_txt->content }}</p>
			<a href="{{ route('salles-de-bain') }}" class="btn waves-effect waves-light">{{ $card_2_btn->content }}</a>
		</div>
		<div class="card">
			<div><img src="{{ $card_3_img->content }}">
				<h2 class="font-weight-bold mb-3">{{ $card_3_titre->content }}</h2>
			</div>
			<p>{{ $card_3_txt->content }}</p>
			<a href="{{ route('rangements') }}" class="btn waves-effect waves-light">{{ $card_3_btn->content }}</a>
		</div>

	</div>

</section>

<section class="my-5 bg-2  animated wow fadeIn">

	<h2 class="h1-responsive font-weight-bold text-center my-5 ">{{ $section_2_titre->content }}</h2>
	

	<div class="grid">
		<div class="owl-carousel owl-theme">
			@foreach($realisations as $realisation)
			<div class="item"><a data-lightbox="{{ $realisation->path }}" href="/storage/{{ $realisation->path }}"><img src="/storage/{{ $realisation->path }}"></a></div>
			@endforeach
		</div>
	</div>


</section>


<section class="my-5  animated wow fadeIn ">

	<h2 class="h1-responsive font-weight-bold text-center my-5">{{ $section_3_titre->content }}</h2>


	<div class="grid">
		<div class="left-map">
			<h3 class='font-weight-bold mb-3 bd-l'>{{ $sous_cat_1->content }}</h3>

			<div>{{ $jour1->content }}</div>
			<div> {{ $h01->content }}</div>
			<div class="m-bot">{{ $h11->content }}</div>

			<div> {{ $jour2->content }}</div>
			<div>{{ $h02->content }}</div>
			<div class="m-bot"> {{ $h22->content }}</div>

			<div> {{ $jour3->content }} </div>
			<div class="m-bot"> {{ $h03->content }}</div>

			<h3 class='font-weight-bold mb-3 bd-l'>{{ $sous_cat_2->content }}</h3>

			<div>{{ $tel->content }}</div>
			<div>{{ $mail->content }}</div>
		</div>
		<div id="map" class="map"></div>

	</div>

	



</section>


<section class="mt-5 bg-2 last  animated wow fadeIn">

	<h2 class="h1-responsive font-weight-bold text-center my-5">{{ $section_4_titre->content }}</h2>


	<div class="grid">
		@foreach($partenaires as $partenaire)
		<a href="{{ $partenaire->link }}"><img class="img-partenaires" src="/storage/{{ $partenaire->image }}"></a>	
		@endforeach
	</div>

	



</section>


<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>
<script src="/js/map.js"></script>
@endsection
