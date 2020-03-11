<?php

namespace App\Http\Controllers;
use App\Mail\MensajeRecibido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MensajeController extends Controller
{
    public function store()
    {
    	// nombre del campo del name del formularioreturn $request->get('nombre');
    	// usamos validate pra validar el formulario, y creamos una variable que guardará los datos introducidos por el usuario en el formulario
    	$mensaje = request()->validate([
    		'nombre' => 'required|min:5',
    		//para que al poner un email erroneo salga un mensaje diciendo que tiene q ser un email no cadena normal. Buscar laravel lang y descargar archivos traducidos al español y crear carpeta en resources/Lang/es
    		'email' => 'required|email',
    		'asunto' => 'required',
    		'content' => 'required|min:3'
    	],[
    		'nombre.required' => 'Necesito tu nombre'
    	]);
    	//email que se envío cuando se envia un formulario. Mejor utilizar queue antes que send, pero se puede usar los dos
    	Mail::to('pagarcmore@outlook.com')->queue(new MensajeRecibido($mensaje));
    	// luego en cmd un mailable hay que crear el email con php artisan make:mail MensajeRecibido, nos va a informar de un mensaje recibido. Luego este archivo es una clase y se encuentrará en App/Mail. Se pone en mail.php en la parte de 'from' en address y name, lo que uno desea. Y en .env se puede tb configurar el email en mail_driver. Si ponemos log, el email se guardará en storage/logs/laravel.log. Para cambiar el asunto del email, creamos una variable publica en MensajeRecibido.php, el mailable

    	//para que se visualice en el navegador el emailreturn new MensajeRecibido($mensaje);
    	//Hay que crear cuenta en mailtrap y luego copiar el username y password y pegar en .env donde mail_driver, esto sirve para hacer pruebas mientras el proyecto no esté acabado.
        //back redirecciona al mismo sitio
    	return back()->with('status', 'Formulario enviado correctamente, pronto entraremos en contacto');
    }
}
