@extends('layout')
@section('title', 'Contactar')
@section('contenido')
<div class="container">
	<div class="row">
		<!--mx-auto para centrar la columna-->
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">

			<!-- ponemos la variable $errors para que salga mensaje de error de la validación en formularioController. Si devuelve falso es q no hay error si es true es que hay error. Podemos hacer esto de abajo para validar todos los campos del form-->

			{{--
			Una forma de validar
			if($errors->any())
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
			@endif--}}
			@if($errors->any())
			@endif
			<!--Hay que crear una ruta en routes para el metodo post-->
			<form class="bg-white shadow rounded py-3 px-4" action="{{ route('mensaje.store') }}" method="POST">
				@csrf <!--Siempre agregar esto a los formularios. los formularios en laravel necesitan tener un tolken para verificar que el formulario es seguro, para evitar ataques, si no laravel no dejará que se envíe
			- Se usa "{! para usar html dentro
			-->
			<!-- buscará la traducción q está entre llaves, y para ello creamos un archivo es.json en lang-->
			<h1 class="display-4">{{ __('Contact') }}</h1>
			<hr>
				<div class="form-group">
					<label for="name">Nombre</label>
					<input class="form-control bg-light shadow-sm @error('nombre') is-invalid @enderror border-1 " type="text"
					id="name"
					name="nombre"
					placeholder="nombre"
					value="{{ old('nombre') }}" />
					@error('nombre')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				<div class="form-group">
					<!-- se usa old('nombre name') para que mantenga el campo relleno por el usuario pàra q pueda editarlo-->
					<label for="email">Email</label>
					<input class="form-control bg-light shadow-sm @error('email') is-invalid @enderror" type="text" name="email" placeholder="correo" value="{{ old('email') }}" />
					@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="asunto">Asunto</label>
					<input class="form-control bg-light shadow-sm @error('asunto') is-invalid @enderror" type="text" name="asunto" placeholder="asunto" value="{{ old('asunto') }}" />
					@error('asunto')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="content">Mensaje</label>
						<textarea class="form-control bg-light shadow-sm @error('content') is-invalid @enderror" name="content" id="" cols="30" rows="5" placeholder="Mensaje..." value="{{ old('content') }}"></textarea>
						@error('content')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				<button class="btn btn-primary btn-lg btn-block">@lang('Send')</button>
			</form>
		</div>
	</div>
</div>
@endsection