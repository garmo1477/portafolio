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
			<p class="lead text-secondary">¡Muy bienvenidos/as! He desarrollado esta pequeña app con laravel, donde os presentaré algunos de mis proyectos de programación realizados durante varios cursos y/o por mi cuenta. Mi objetivo con esto, es en un futuro encontrar trabajo como programadora Backend o Frontend. Si te interesa puedes contactame más abajo y mirar mi portafolio para ver mis trabajos.</p>
			<a class="btn btn-lg btn-block btn-primary" href="{{ route('contacto') }}">Contáctame</a>
			<a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index') }}">Portafolio</a>

		</div>

	</div>
</div>

@endsection
