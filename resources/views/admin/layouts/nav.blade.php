<nav class="admin-nav">
	<h1 class="h1-responsive"><span>RM</span> CUISINES</h1>
	<ul>
		<li class="nav-item">
			<a class="nav-link" href="{{ route('admin') }}">Menu principal</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="{{ route('admin-pages') }}">Gestion des pages</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="{{ route('admin-images') }}">Banque d'images</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="{{ route('admin-catalogues') }}">Gestion des catalogues</a>
		</li>
		<li class="nav-item">
			<form  action="{{ route('logout') }}" method="POST" >
				@csrf
				<button class="nav-link" type="submit">Se deconnecter</button>
			</form>
		</li>
		
	</ul>
	
	
</nav>