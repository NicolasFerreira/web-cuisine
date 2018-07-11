@extends('admin.layouts.appadmin')

@section('title')
Dashboard
@endsection


@section('content')
<section class="dashboard">

	<div class="card">
		<img class="card-img-top" src="/images/cuisine_02.jpg" alt="Card image cap">
		<div class="card-body">
			<h4 class="card-title"><a>Gestion des pages</a></h4>
			<p class="card-text">Dans cette partie du site , vous pouvez étider le texte des différentes pages du site : Page d'accueil , les différentes pages catalogues , etc ... Vous avez aussi la possibilité de modifier les photos des pages avec vos images stockées dans votre banque d'images.</p>
			<a href="{{ route('admin-pages') }}" class="btn waves-effect waves-light">Éditer</a>
		</div>
	</div>

	<div class="card">
		<img class="card-img-top" src="/images/bain_02.jpg" alt="Card image cap">
		<div class="card-body">
			<h4 class="card-title"><a>Banque d'images</a></h4>
			<p class="card-text">Dans cette partie du site , vous pouvez gérer les images des différentes pages du site , images d'accueil , icones , etc ... </p>
			<a href="{{ route('admin-images') }}" class="btn waves-effect waves-light">Éditer</a>
		</div>
	</div>

	<div class="card">
		<img class="card-img-top" src="/images/cuisine_03.jpg" alt="Card image cap">
		<div class="card-body">
			<h4 class="card-title"><a>Gestion des catalogues</a></h4>
			<p class="card-text">Dans cette partie du site , vous pouvez gérer les 3 différents catalogues du site , ajouter un article , l'éditer ou le supprimer .</p>
			<a href="{{ route('admin-catalogues') }}" class="btn waves-effect waves-light">Éditer</a>
		</div>
	</div>



</section>
@endsection
