<?php

namespace App\Jobs;

use App\Fila;
use App\EmailModelo;
use App\Email;
use App\Mail\SendMailModelo;
use Mail;  
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class EmailFila implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    /**
     * Create a new job instance.
     *
     * @return void
     */

    private $fila;


    public function __construct(Fila $fila)
    {
        //
        $this->fila = $fila;


    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {



        $email =  Email::where('email','=',$this->fila->email)->first();

        $modelo =  EmailModelo::find($this->fila->idModelo);
    
        Log::info('enviado email ... ' );      

        Mail::to($this->fila->email)
            ->send(new SendMailModelo($email,$modelo));

        Log::info('Email enviado para ' . $email->nome);      


        $filaEnviada = Fila::find($this->fila->id);
        $filaEnviada->status = 'ENVIADO';
        $filaEnviada->save();


    }
    
}
