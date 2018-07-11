@extends('admin.layouts.appadmin')

@section('title')
Cuisines - Modifier
@endsection


@section('content')

<a href="{{ route('admin-catalogues-cuisines-index') }}" style="color:black;"> <- Retour</a>

<form method="POST" enctype="multipart/form-data" action="{{ action('CuisinesController@update', [$cuisine->id]) }}" class="form-add">
	@csrf
	<h3>Modification d'une cuisine dans votre catalogue</h3>
	<div>
		<label for="titre">Titre : </label>
		<input type="text" name="titre" required placeholder="Titre" id="titre" value="{{ $cuisine->titre }}">
	</div>
	<div>
		<label for="prix">Prix : </label>
		<input type="text" name="prix" required placeholder="A partir de xxx €" id="prix" value="{{ $cuisine->prix }}">
	</div>
	<div>
		<label for="image">Image : </label>
		<select name="image" class="custom-select" id="image" required>
			<option disabled>Choix image</option>
			@foreach($medias as $media)
			@if( $media->path === $cuisine->image)
			<option value="{{ $media->path }}" selected>{{ $media->path }}</option>
			@else
			<option value="{{ $media->path }}">{{ $media->path }}</option>
			@endif
			@endforeach
		</select>
	</div>

	<div id="ajax-img" class="ajax-img">
		<img src="/storage/{{ $cuisine->image }}">
	</div>
	

	<input type="submit" class="btn waves-effect waves-light" value="CONFIRMER" id="ajouter"/>
	
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
