@extends('layout')
@section('title', 'Editar Proyecto')
@section('contenido')
<div class="container">
	<div class="row">
		<!--mx-auto para centrar la columna-->
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">

			<!-- implementación REST, route('projects.store'), que es el nombre de la ruta que dimos en wep.php-->
			@include('partials.estado-sesion')
			@include('partials.validation-errors') <!--incluimos archivo de validación de formulario-->
			<form class="bg-white py-3 px-4 shadow rounded" action="{{ route('projects.update', $project) }}" method="POST">
				<h1 class="display-4">Editar proyecto</h1>
				<hr>
				<!--directivas de laravel para formularios, el method es para usar el patch, que crea un input oculto-->
				@method('PATCH')
				<!--incluimos el formulario que esta en _form.blade.php-->
				@include('partials._form', ['btnText' => 'Actualizar'])
				<!--podemos enviar en el include el valor del boton para que se cambie según la página donde estemos-->

			</form>
		</div>
	</div>
</div>

@endsection