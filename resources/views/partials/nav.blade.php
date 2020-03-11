<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
	<div class="container">
		<a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name') }}</a>
		<button class="navbar-toggler" type="button"
			data-toggle="collapse"
			data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent"
			aria-expanded="false"
			aria-label="{{ __('Toggle navigation') }}">
	        <span class="navbar-toggler-icon"></span>
	    </button>
    	<div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<!--Pills, hace un boton en el enlace activo-->
			<ul class="nav nav-pills">
			<!--Para el setActive.Para que funcione esto y que llame a la función de helpers.php hay que modificar archivo composer.json.
			hay que añadir "files": ["app/helpers.php"] en autoload de composer.json , y además hay
	        que ejecutar en cmd esto: composer dumpautoload -->
	        <!--Con bootstrap usar clase nav en la ul, luego nav-item para los lis y nav-link para los a-->
				<li class="nav-item">
					<a class="nav-link {{ setActive('home') }}" href="{{ route('home') }}">{{ __('Home') }}</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link {{ setActive('about') }}" href="{{ route('about') }}">{{ __('About') }}</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ setActive('projects.*') }}" href="{{ route('projects.index') }}">{{ __('Projects') }}</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link {{ setActive('contacto') }}" href="{{ route('contacto') }}">{{ __('Contact') }}</a>
				</li>
				@guest
			<!--Solo se ejecuta si no hemos iniciado seccion. o sea solo saldra el enlace de Login si no estamos logueados. Al contrario de auth-->
					<li class="nav-item">
						<a class="nav-link {{ setActive('login') }}" href="{{ route('login') }}">{{ __('Login') }}</a>
					</li>
				@else
					<li class="nav-item">
						<a class="nav-link" href="#"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">Cerrar Sesión</a>
					</li>
				@endguest
			</ul>
    	</div>
	</div>
</nav>



<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>