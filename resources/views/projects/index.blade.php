@extends('layout')
@section('title', 'Portfolio')
@section('contenido')
<div class="container">
	<div>
		<img class="img-fluid mb-4" src="/../img/projects.svg" alt="proyectos">
	</div>
	<!--d-flex es lo mismo que display: flex. mb-0 es margin: 0-->
	<div class="d-flex justify-content-between align-items-center mb-3">
		<h1 class="display-4 mb-0">{{ __('Projects') }}</h1>
		@auth
			<a class="btn btn-primary" href=" {{ route('projects.create') }} ">Crear nuevo proyecto</a>
		@endauth
	</div>
	<hr>
	<p class="lead text-secondary">Aquí se pueden ver todos los proyectos que he ido desarrollando. Proyectos de programación Laravel y Angular. En esta sección se puede crear, editar, eliminar y ver proyectos. Es donde se puede ver un poco como trabajo con el CRUD de Laravel. Para poder probar la creación de proyectos hay que registarse primero</p>
	<ul class="list-group">
		<!-- el isset mirará si la variable existe y si no utilizará el else, si existe hace el foreach. También se puede utilizarf en vez de foreach un forelse y dentro de él un @ empty que funciona como un else y luego cerrar endforelse-->
		@isset($projects)
			@foreach ($projects as $project)
			<!--usando variable loop para identificar el utlimo o primero de un array-->
			<li class="list-group-item border-0 mb-3 shadow-sm">
				<a class="text-secondary d-flex justify-content-between align-items-center" href="{{ route('projects.show', $project) }}">
					<span class="font-weight-bold">{{ $project->title }}</span>
					
					<span class="text-black-50">{{ $project->created_at->format('d/m/y') }}</span>
				</a>
			</li>
			@endforeach
			@else
				<li class="list-group-item border-0 mb-3 shadow-sm">No hay ningún proyecto en el momento</li>
			@endisset


	</ul>
	{{ $projects->links() }} <!--paginación portfolio-->
</div>

@endsection