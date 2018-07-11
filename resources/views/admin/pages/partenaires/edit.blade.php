@extends('admin.layouts.appadmin')

@section('title')
Pages - partenaires - edit
@endsection


@section('content')

<a href="{{ route('admin-pages-partenaires-index') }}" style="color:black;"> <- Retour</a>

<form method="POST" enctype="multipart/form-data" action="{{ action('PartenairesController@update',[$partenaire->id]) }}" class="form-add">
	@csrf
	<h3>Gestion des partenaires</h3>

    <div>
        <label for="link">Lien ( url ) : </label>
        <input type="text" name="link" required placeholder="Lien site internet" id="link" value="{{ $partenaire->link }}">
    </div>
    
	<div>
        <label for="image">Image : </label>
        <select name="image" class="custom-select" id="image" required>
            <option disabled>Choix image</option>
            @foreach($medias as $media)
            @if( $media->path === $partenaire->image)
            <option value="{{ $media->path }}" selected>{{ $media->path }}</option>
            @else
            <option value="{{ $media->path }}">{{ $media->path }}</option>
            @endif
            @endforeach
        </select>
    </div>
	
	<div id="ajax-img" class="ajax-img">
		<img src="/storage/{{ $partenaire->image }}">
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
