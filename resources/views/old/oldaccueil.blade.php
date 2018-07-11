@extends('layouts.app')

@section('content')
<div class="titre-box  animated wow fadeIn" style="background-image: url('images/cuisine_01.jpg'); ">
	<div class="titre">
		<h1 class="h1-responsive"><span>RM</span> CUISINES</h1>
		<h2 class="h2-responsive">Cuisines et salles de bains sur mesure</h2>
	</div>
</div>


<section class="my-5 animated wow fadeInUp " >

	<!-- Section heading -->
	<h2 class="h1-responsive font-weight-bold text-center my-5">Nos catalogues</h2>


	<div class="grid" >
		<div class="card" >
			<img src="images/icons8-kitchen.png"  >
			<h2 class="font-weight-bold mb-3">Cuisines</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis repudiandae facere, voluptate? Voluptates rem quae, id praesentium inventore molestiae esse necessitatibus velit assumenda pariatur quibusdam, quis tempora nostrum nobis dicta.</p>
			<a href="{{ route('cuisines') }}" class="btn waves-effect waves-light">Découvrir</a>
		</div>
		<div class="card">
			<img src="images/icons8-shower_and_tub.png">
			<h2 class="font-weight-bold mb-3">Salles de bains</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis repudiandae facere, voluptate? Voluptates rem quae, id praesentium inventore molestiae esse necessitatibus velit assumenda pariatur quibusdam, quis tempora nostrum nobis dicta.</p>
			<a href="{{ route('salles-de-bain') }}" class="btn waves-effect waves-light">Découvrir</a>
		</div>
		<div class="card">
			<img src="images/icons8-sliding_door_closet.png">
			<h2 class="font-weight-bold mb-3">Rangements</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis repudiandae facere, voluptate? Voluptates rem quae, id praesentium inventore molestiae esse necessitatibus velit assumenda pariatur quibusdam, quis tempora nostrum nobis dicta.</p>
			<a href="{{ route('rangements') }}" class="btn waves-effect waves-light">Découvrir</a>
		</div>

	</div>

</section>

<section class="my-5 bg-2  animated wow fadeInUp">

	<h2 class="h1-responsive font-weight-bold text-center my-5 ">Nos réalisations</h2>
	

	<div class="grid">
		<div class="owl-carousel owl-theme">
			<div class="item"><a data-lightbox="1" href="images/cuisine_01.jpg"><img src="images/cuisine_01.jpg"></a></div>
			<div class="item"><a data-lightbox="2" href="images/cuisine_02.jpg"><img src="images/cuisine_02.jpg"></a></div>
			<div class="item"><a data-lightbox="3" href="images/cuisine_03.jpg"><img src="images/cuisine_03.jpg"></a></div>
			<div class="item"><a data-lightbox="4" href="images/bain_01.jpg"><img src="images/bain_01.jpg"></a></div>
			<div class="item"><a data-lightbox="5" href="images/bain_02.jpg"><img src="images/bain_02.jpg"></a></div>
			<div class="item"><a data-lightbox="6" href="images/bain_03.jpg"><img src="images/bain_03.jpg"></a></div>

		</div>
	</div>


</section>


<section class="my-5  animated wow fadeInUp ">

	<h2 class="h1-responsive font-weight-bold text-center my-5">Notre boutique</h2>


	<div class="grid">
		<div class="left-map">
			<h3 class='font-weight-bold mb-3 bd-l'>Horaires</h3>

			<div>Mar - Ven </div>
			<div> 9:00-12:00</div>
			<div class="m-bot">14:00-19:00</div>

			<div> Sam</div>
			<div>10:00-12:00</div>
			<div class="m-bot"> 15:00-19:00</div>

			<div> Lun - Dim </div>
			<div class="m-bot"> Fermé</div>

			<h3 class='font-weight-bold mb-3 bd-l'>Contact</h3>

			<div>Tel : 05 65 20 23 20</div>
			<div>Mail : rmcuisines@gmail.com</div>
		</div>
		<div id="map" class="map"></div>

	</div>

	



</section>


<section class="mt-5 bg-2 last  animated wow fadeInUp">

	<h2 class="h1-responsive font-weight-bold text-center my-5">Nos partenaires</h2>


	<div class="grid">
		<img class="img-partenaires" src="images/logo-you.png">
		<img class="img-partenaires" src="images/logo-you.png">
		<img class="img-partenaires" src="images/logo-you.png">
	</div>

	



</section>


<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>
<script src="/js/map.js"></script>
@endsection
