<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MensajeRecibido extends Mailable
{
    use Queueable, SerializesModels;
    //creamos una variable que guarda el asunto del email
    public $subject = "Mensaje recibido";
    public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    //pasamos la variable mensaje de FormularioController pero antes la declaramos arriba. Luego hay que crear var_dump en mensaje_recibido
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.mensaje_recibido');
        //hay que crear la carpeta emails, dentro de views y la vista mensaje_recibido, donde podremos meter html
    }
}
