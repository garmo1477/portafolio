@extends('layout')
@section('title', 'Portafolio | ' . $project->title)
@section('contenido')
<div class="container">
	<div class="bg-white p-5 shadow rounded">
	<h1> {{ $project->title }} </h1>
	<hr>

	<p class="lead text-secondary"> {{ $project->description }} </p>
	<p class="text-black-50"> {{ $project->created_at->diffForHumans() }} </p> <!--diffForHumans enseñará la fecha en, hace 3 horas, por ejemplo-->
	<div class="d-flex justify-content-between align-items-center">
		@auth <!--Solo permitirá editar si el usuario está logueado-->
		<div class="btn-group btn-group-sm">
			<a class="btn btn-primary mr-3 rounded-0" href="{{ route('projects.edit', $project) }}">Editar</a>
			<a href="#" class="btn btn-danger rounded-0" onclick="document.getElementById('delete-project').submit()">Eliminar</a>
		</div>
		<div class="btn-group">
			<form class="d-none" action="{{ route('projects.destroy', $project) }}" method="POST">
				@csrf @method('DELETE')

			</form>
		</div>
	@endauth
	<a href="{{ route('projects.index') }}" class="link-item">Volver a Proyectos</a>
	</div>

</div>
</div>

@endsection