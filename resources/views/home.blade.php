@extends('layout')
@section('title', 'Inicio')
@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-12 col-lg-6">
			<img class="img-fluid mb-4" src="/img/home.svg" alt="foto inicio">
		</div>
		<div class="col-12 col-lg-6">
			<h1 class="display-4 text-primary">Desarrollo Web</h1>
			<p class="lead text-secondary">¡Muy bienvenidos/as! Me llamo Paloma. He desarrollado esta pequeña app con laravel, el objetivo es demostrar un poco mis conocimientos en programación PHP con Laravel. En esta web se puede crear cuenta de usuario para luego poder crear, editar, listar o eliminar proyectos. También cuenta con un formulario para contactar.</p>
			<a class="btn btn-lg btn-block btn-primary" href="{{ route('contacto') }}">Contáctame</a>
			<a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index') }}">Portafolio (CRUD Laravel)</a>

		</div>

	</div>
</div>

@endsection
