@extends('admin.layouts.appadmin')

@section('title')
Pages - realisations - create
@endsection


@section('content')

<a href="{{ route('admin-pages-realisations-index') }}" style="color:black;"> <- Retour</a>

<form method="POST" enctype="multipart/form-data" action="{{ action('RealisationsController@store') }}" class="form-add">
	@csrf
	<h3>Gestion des réalisations</h3>
	
	<div>
		<label for="image">Image : </label>
		<select name="image" class="custom-select" id="image" required>
			<option disabled selected>Choix image</option>
			@foreach($medias as $media)
			<option value="{{ $media->path }}">{{ $media->path }}</option>
			@endforeach
		</select>
	</div>
	
	<div id="ajax-img" class="ajax-img">
		
	</div>

	<input type="submit" class="btn waves-effect waves-light" value="AJOUTER" id="ajouter"/>
	
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
