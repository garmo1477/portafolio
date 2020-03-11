@extends('layout')
@section('title', 'Crear Proyecto')
@section('contenido')
<div class="container">
	<div class="row">
		<!--mx-auto para centrar la columna-->
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">

			<!-- implementación REST, route('projects.store'), que es el nombre de la ruta que dimos en wep.php-->

			@include('partials.validation-errors')
			<form class="bg-white py-3 px-4 shadow rounded" action="{{ route('projects.store') }}" method="POST">
				<h1 class="display-4">Crear nuevo proyecto</h1>
				<hr>
				@include('partials._form', ['btnText' => 'Guardar'])

			</form>
		</div>
	</div>
</div>


@endsection