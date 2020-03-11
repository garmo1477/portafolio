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
			<p class="lead text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut dolor recusandae, maiores distinctio id cum! Enim sed suscipit ducimus eaque sunt eius officiis omnis? Earum facilis sit aut, ipsum soluta!</p>
			<a class="btn btn-lg btn-block btn-primary" href="{{ route('contacto') }}">Contáctame</a>
			<a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index') }}">Portafolio</a>

		</div>

	</div>
</div>

@endsection
