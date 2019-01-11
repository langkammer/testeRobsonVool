<?php

namespace App\Mail;

use App\Email;
use App\EmailModelo;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Collection;

class SendMailModelo extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     */


    public $email;

    public $modelo;

    public function __construct(Email $email,EmailModelo $modelo)
    {
        //
        
        //parent::__construct();


        $this->email  = $email;
        $this->modelo  = $modelo;


    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('naoresponda@email.com')
                ->view('mail.msg');
    }
}
