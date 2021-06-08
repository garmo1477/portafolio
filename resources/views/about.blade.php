@extends('layout')
@section('title', "Sobre mí")
@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<img class="img-fluid mb-4" src="/img/about.svg" alt="sobre mí">
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-lg-6">
			<h1 class="display-4 text-primary">Sobre mí</h1>
			<p class="lead text-secondary">Me llamo Paloma Garcia, tengo 37 años. Soy técnica superior en DAI (antiguo DAW) realizado entre 2005/2007. Desde pequeña me apasionan los ordenadores, de ahí que en 2005 haya decidido aprender a programar. He seguido estudiando y he realizado dos <span class="font-weight-bold">Certificados de profesionalidad</span> el primero, de "Creación y Publicación de Páginas Web" en 2017, donde volví a ver HTML, CSS, JavaScript, PHP etc. Fue un curso bastante profundo en ese aspecto, y por ello decidí seguir por ese camino, porque veía que me gustaba bastante. Así que al año siguiente cursé otro <span class="font-weight-bold">Certificado de Profesionalidad</span>, esta vez de nivel 3, que equivale a una FP de grado superior, de "Desarrollo de Aplicaciones con Tecnologías Web". En este último curso vimos más a fondo javascript y PHP, estudiando la programación orientada a objetos. Para terminar estuvo estudiando Laravel de manera autodidacta. Resumen de conocimientos adquiridos:</p>
		</div>
		<div class="col-12 col-lg-6 py-4">
				<ul class="list-group">
					<li class="list-group-item">HTML/HTML5</li>
					<li class="list-group-item">CSS3</li>
					<li class="list-group-item">Bootstrap</li>
					<li class="list-group-item">JavaScript</li>
					<li class="list-group-item">PHP</li>
					<li class="list-group-item">Laravel</li>
					<li class="list-group-item">SQL</li>
					<li class="list-group-item">MySQL</li>
					<li class="list-group-item">PhpMyAdmin</li>
					<li class="list-group-item">JQuery</li>
					<li class="list-group-item">POO/OOP</li>
					<li class="list-group-item">Wordpress</li>
					<li class="list-group-item">Prestashop</li>
					<li class="list-group-item">Docker</li>
					<li class="list-group-item">Git, Bitbucket, SourceTree</li>					
				</ul>
		</div>
		<div class="col-md-2"></div>
		<div class="col-12 col-lg-8 py-4">
			<a class="btn btn-lg btn-block btn-primary" href="{{ route('contacto') }}">Contáctame</a>
			<a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index') }}">Portafolio</a>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
<div class="row">
</div>
@endsection