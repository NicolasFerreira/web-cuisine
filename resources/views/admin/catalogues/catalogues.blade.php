@extends('admin.layouts.appadmin')

@section('title')
Catalogues
@endsection


@section('content')

<section class="dashboard catalogues">

	<div class="card">
		<img class="card-img-top" src="/images/cuisine_03.jpg" alt="Card image cap">
		<div class="card-body">
			<h4 class="card-title"><a>Cuisines</a></h4>
			<p class="card-text">Dans cette partie du site , vous pouvez gérer le catalogue des cuisines.</p>
			<a href="{{ route('admin-catalogues-cuisines-index') }}" class="btn waves-effect waves-light">Éditer</a>
		</div>
	</div>

	<div class="card">
		<img class="card-img-top" src="/images/bain_03.jpg" alt="Card image cap">
		<div class="card-body">
			<h4 class="card-title"><a>Salles de bain</a></h4>
			<p class="card-text">Dans cette partie du site , vous pouvez gérer le catalogue des cuisines. </p>
			<a href="{{ route('admin-catalogues-sdb-index') }}" class="btn waves-effect waves-light">Éditer</a>
		</div>
	</div>

	<div class="card">
		<img class="card-img-top" src="/images/bain_01.jpg" alt="Card image cap">
		<div class="card-body">
			<h4 class="card-title"><a>Rangements</a></h4>
			<p class="card-text">Dans cette partie du site , vous pouvez gérer le catalogue des cuisines.</p>
			<a href="{{ route('admin-catalogues-rangements-index') }}" class="btn waves-effect waves-light">Éditer</a>
		</div>
	</div>



</section>



@endsection
