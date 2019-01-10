<?php

namespace App\Jobs;

use App\Fila;
use App\EmailModelo;
use App\Mail\SendMailModelo;
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
    public function __construct()
    {
        //

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        /*$filas = DB::table('filas')
            ->where('status', '=', 'PENDENTE')
            ->get();
       */

        $filas = Fila::where('status','=','PENDENTE')->get();
        foreach($filas as $fila) {

            Mail::to($fila->email)
                    ->send(new SendMailModelo());

            $filaEnviada = Fila::find($fila->id);
            $filaEnviada->status = 'ENVIADO';
            $filaEnviada->save();
        }
       



    }
    
}
