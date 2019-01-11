<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\EmailFila;
use Illuminate\Support\Facades\Log;
use App\Fila;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function enviar(Request $request)
    {
        //
        try {
            Log::info('
             Fila de Email acionara um Jobs de
             envio de emails contruido para escalar aplicação...');
                        
            for ($i = 0; $i < count($request->all()); $i++) {
                Log::info("EMPURRANDO PARA FILA " . $request->all()[$i]['nome']);      
                $fila = new Fila;
                $fila->email = $request->all()[$i]['email'];
                $fila->idModelo = $request->all()[$i]['idModelo'];
                $fila->status = 'PENDENTE';
                $fila->save(); 
            }
            
            return ['mensagem' => "ok"];

          }

        catch (\Exception $e) {
            Log::info($e);      

            return ['mensagem' => "erro"]; 
        }
        
    }

    
}
