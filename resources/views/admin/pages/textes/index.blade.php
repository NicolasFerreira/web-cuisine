@extends('admin.layouts.appadmin')

@section('title')
Pages
@endsection


@section('content')

<a href="{{ route('admin-pages') }}" style="color:black;"> <- Retour</a>

{{-- {{ action('PagesController@update') }} --}}
<form method="POST" enctype="multipart/form-data" action="{{ action('PagesController@updateH') }}" class="">
	@csrf
	<h3>Edition des textes de la page d'accueil du site</h3>

	<hr>

	<div>
		<label for="titre">Titre : </label>
		<input type="text" name="titre1" required id="titre" value="{{ $titre1->content }}">
		<input type="text" name="titre2" required id="titre" value="{{ $titre2->content }}">
	</div>
	<div>
		<label for="sous-titre">Sous-titre : </label>
		<input type="text" name="soustitre" required id="sous-titre" value="{{ $soustitre->content }}">
	</div>
	<div class="ajax-main-div">
		<div>
			<label for="image">Photo principale sur la page Accueil : </label>
			<select name="image" class="custom-select ajax-main-select" id="image" required>
				<option disabled>Choix image</option>
				@foreach($medias as $media)
				@if( $media->path === $image->content)
				<option value="{{ $media->path }}" selected>{{ $media->path }}</option>
				@else
				<option value="{{ $media->path }}">{{ $media->path }}</option>
				@endif
				@endforeach
			</select>
		</div>

		<div id="ajax-img" class="ajax-img ajax-main-img">
			<img src="/storage/{{ $image->content }}">
		</div>
	</div>
	<hr>

	<div>
		<label for="section_1_titre">Section 1 titre </label>
		<input type="text" name="section_1_titre" required id="section_1_titre" value="{{ $section_1_titre->content }}">
	</div>
	<div>
		<div>
			<label for="card_1_titre">Titre box gauche </label>
			<input type="text" name="card_1_titre" required id="card_1_titre" value="{{ $card_1_titre->content }}">
			<label for="card_1_txt">Texte box gauche </label>
			<textarea name="card_1_txt" id="card_1_txt">{{ $card_1_txt->content }}</textarea>
			<label for="card_1_btn">Bouton box gauche </label>
			<input type="text" name="card_1_btn" required id="card_1_btn" value="{{ $card_1_btn->content }}"> 
		</div>
		<div>
			<label for="card_2_titre">Titre box centre </label>
			<input type="text" name="card_2_titre" required id="card_2_titre" value="{{ $card_2_titre->content }}">
			<label for="card_2_txt">Texte box centre </label>
			<textarea name="card_2_txt" id="card_2_txt">{{ $card_2_txt->content }}</textarea>
			<label for="card_2_btn">Bouton box centre </label>
			<input type="text" name="card_2_btn" required id="card_2_btn" value="{{ $card_2_btn->content }}"> 
		</div>
		<div>
			<label for="card_3_titre">Titre box droite </label>
			<input type="text" name="card_3_titre" required id="card_3_titre" value="{{ $card_3_titre->content }}">
			<label for="card_3_txt">Texte box droite </label>
			<textarea name="card_3_txt" id="card_3_txt">{{ $card_3_txt->content }}</textarea>
			<label for="card_3_btn">Bouton box droite </label>
			<input type="text" name="card_3_btn" required id="card_3_btn" value="{{ $card_3_btn->content }}"> 
		</div>
	</div>
	
	<hr>

	<div>
		<label for="section_2_titre">Section 2 titre </label>
		<input type="text" name="section_2_titre" required id="section_2_titre" value="{{ $section_2_titre->content }}">
	</div>
	
	<hr>

	<div>
		<label for="section_3_titre">Section 3 titre </label>
		<input type="text" name="section_3_titre" required id="section_3_titre" value="{{ $section_3_titre->content }}">
	</div>
	<div>
		<label for="sous_cat_1">Sous-catégorie 1 : </label>
		<input type="text" name="sous_cat_1" required id="sous_cat_1" value="{{ $sous_cat_1->content }}">
	</div>
	<div>
		<label for="jour1">Jour semaine : </label>
		<input type="text" name="jour1" required id="jour1" value="{{ $jour1->content }}">
		<label for="h01">Horaires matin : </label>
		<input type="text" name="h01" required id="h01" value="{{ $h01->content }}">
		<label for="h11">Horaires matin : </label>
		<input type="text" name="h11" required id="h11" value="{{ $h11->content }}">
	</div>
	<div>
		<label for="jour2">Jour week-end : </label>
		<input type="text" name="jour2" required id="jour2" value="{{ $jour2->content }}">
		<label for="h02">Horaires matin : </label>
		<input type="text" name="h02" required id="h02" value="{{ $h02->content }}">
		<label for="h22">Horaires matin : </label>
		<input type="text" name="h22" required id="h22" value="{{ $h22->content }}">
	</div>
	<div>
		<label for="jour3">Jour fermé : </label>
		<input type="text" name="jour3" required id="jour3" value="{{ $jour3->content }}">
		<label for="h03">Horaires texte : </label>
		<input type="text" name="h03" required id="h03" value="{{ $h03->content }}">
	</div>
	
	<div>
		<label for="sous_cat_2">Sous-catégorie 2 : </label>
		<input type="text" name="sous_cat_2" required id="sous_cat_2" value="{{ $sous_cat_2->content }}">
	</div>
	<div>
		<label for="tel">Tel : </label>
		<input type="text" name="tel" required id="tel" value="{{ $tel->content }}">
	</div>

	<div>
		<label for="mail">Mail : </label>
		<input type="text" name="mail" required id="mail" value="{{ $mail->content }}">
	</div>


	<hr>

	<div>
		<label for="section_4_titre">Section 4 titre </label>
		<input type="text" name="section_4_titre" required id="section_4_titre" value="{{ $section_4_titre->content }}">
	</div>
	
	

	<input type="submit" class="btn waves-effect waves-light" value="SAUVEGARDER" id="ajouter"/>
	
</form>


<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>



<script>
	$(document).ready(function(){
		var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
		$('#image').on('change',function(){
			$.ajax({
				/* the route pointing to the post function */
				url: '/postajax',
				type: 'POST',
				/* send the csrf-token and the input to the controller */
				data: {_token: CSRF_TOKEN, image:$("#image").val()},
				dataType: 'JSON',
				/* remind that 'data' is the response of the AjaxController */
				success: function (data) { 
					console.log('text : '+data.img); 
					$("#ajax-img").html('<img src="/storage/'+data.img+'">');
				}
			}); 
		});
	});    
</script>





@endsection
