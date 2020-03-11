<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
Route::get('contactame', function(){
	return "Sección de contactos";
})->name('contactos');//le damos un nombre a la ruta, que es como una variable, así si cambiamos el enlace en route::get se cambiará todo lo de abajo

Route::get('/', function(){
	echo "<a href=' ".route('contactos')."'>Contactos 1</a><br>";
	echo "<a href=' ".route('contactos')."'>Contactos 2</a><br>";
	echo "<a href=' ".route('contactos')."'>Contactos 3</a><br>";
	echo "<a href=' ".route('contactos')."'>Contactos 4</a><br>";
	echo "<a href=' ".route('contactos')."'>Contactos 5</a><br>";
});*/
/*
Route::get('/', function (){
	$nombre="Camila";
    return view('home', ['nombre'=> $nombre]);// o con compact ('nombre') que devuelve el mismo array si ponemos el mismo nombre que la variable
})->name('home');*/
//Route::view('/', 'home', ['nombre'=> 'Pedro']);


Route::view('/', 'home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');
/* rutas para el portafolio
Route::get('/portafolio', 'ProjectController@index')->name('projects.store');
Route::post ('/portafolio', 'ProjectController@store')->name('projects.index');
//es importante el orden de las rutas
Route::get('/portafolio/crear','ProjectController@create')->name('projects.create');
Route::get('/portafolio/{project}/editar','ProjectController@edit')->name('projects.edit');
//crear ruta para guardar lo que se ha editado en la base de datos, se usa peticion PATCH y para ello hay que añadir directiva en formulario @method('PATCH' o DELETE para eliminar registros), es como GET o POST
Route::patch('/portafolio/{project}','ProjectController@update')->name('projects.update');
Route::get('/portafolio/{project}','ProjectController@show')->name('projects.show');
Route::delete('/portafolio/{project}', 'ProjectController@destroy')->name('projects.destroy');*/

//ruta simplificada de lo de arriba
Route::resource('portafolio', 'ProjectController')
	->parameters(['portafolio' => 'project'])
	->names('projects');

Route::view('/contacto', 'contacto')->name('contacto');//ruta para enviar formulario con metodo post
Route::post('contacto', 'MensajeController@store')->name('mensaje.store');
//se puede usar estos names luego en los route de las vistas {{ route... }}

//para mostrar solo las rutas específicas se usa show, o except para mostrar todas excepto las q pongamos aqui
//Route::resource('proyectos', 'PortfolioController');

//deshabilitar registro
Auth::routes(['register' => false]);

