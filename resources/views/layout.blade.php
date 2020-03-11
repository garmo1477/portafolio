<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>
	<!--enlazamos el archivo css que viene en laravel-->
	<link rel="stylesheet" href="{{ mix('css/app.css') }}">
	<!--atributo defer, para que se ejecute al final de la carga-->
	<script src="{{ mix('js/app.js') }}" defer></script>

</head>
<body>
	<!--incluimos el menu que está en otro lado, en views/partials/nav.blade.php para que salga el menú en todas las páginas. Pero éste está separado de todos-->

	<!--Usamos flex-column para que lo separe en columnas, d-flex, y luego justify-content-between para que cada apartado se vea en su sitio-->
	<div id="app" class="d-flex h-screen flex-column justify-content-between">
		<header>
			@include('partials.nav')
			@include('partials.estado-sesion')
		</header>
		<main class="py-4">
			@yield('contenido')
		</main>
		<!--py-3 sirve para dar padding top y bottom-->
		<footer class="bg-white text-black-50 text-center py-3 shadow">
			{{ config('app.name') }} | Copyright @ {{ date('Y') }}
		</footer>
	</div>

</body>
</html>