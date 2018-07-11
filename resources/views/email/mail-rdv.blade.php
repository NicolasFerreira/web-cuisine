<h2>RM <span style="color:red;">CUISINES</span> WEBSITE MAIL </h2>

<div class="card" style="width: 400px;">
	<div class="card-body">
		<hr>

		<h4 class="card-title">Récapitulatif demande de RDV Client</h4>
		<!-- Text -->
		<hr>
		<p class="card-text">Nom : <strong>{{ $rdv->nom }}</strong></p>
		<hr>
		<p class="card-text">Prenom : <strong>{{ $rdv->prenom }}</strong></p>
		<hr>
		<p class="card-text">Date 1er choix : <strong>{{ $rdv->date_1 }} </strong></p>
		<hr>
		<p class="card-text">Horaires 1 : <strong>{{ $rdv->horaires_1 }}</strong></p>
		<hr>
		<p class="card-text">Date 2ème choix : <strong>{{ $rdv->date_2 }} </strong></p>
		<hr>
		<p class="card-text">Horaires 2 : <strong>{{ $rdv->horaires_2 }}</strong></p>
		<hr>

		<p class="card-text">Email : <strong>{{ $rdv->email }}</strong></p>
		<hr>
		<p class="card-text">Tel : <strong>{{ $rdv->numero }}</strong></p>
		<hr>

		<p class="card-text">Commentaires : <strong>{{ $rdv->commentaires }}</strong></p>
		<hr>

	</div>

</div>