<div class="container-fluid bar">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header col-md-1">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img class="logo" src="{{ url('/images/logo.png') }}" alt="logo"/></a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="{{ url('/') }}">Accueil <span class="sr-only">(current)</span></a></li>
					<li><a href="{{ url('/parc') }}">Parc automobile</a></li>
					<li><a href="{{ url('/conditions') }}">Conditions générales</a></li>
					<li><a href="#">Promotions</a></li>
					<li><a href="{{ url('/contact') }}">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
</div>
<div class="fixed"></div>