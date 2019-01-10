<?php

namespace App\Http\Controllers;

use App\EmailModelo;
use Illuminate\Http\Request;
use App\Http\Requests\ModeloRequest;
use App\EmailFila;

class EmailModeloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $modelos = EmailModelo::all();

        return view('modelo.index', compact('modelos'));
    }

    public function enviar(EmailModelo $modelo)
    {
        //
        $emails = EmailFila::pluck('nome', 'id')->all();

        return view('modelo.envia', compact('modelo'));

    }

    public function getEmails(){

        $emails = EmailFila::all();


        if($emails!=null)
            return ['data' => ['data' => $emails], 'mensagem' => "ok"];
        else
            return ['data' => ['data' => null],'mensagem' => "sem dados"];
    }

    public function getModelo(EmailModelo $modelo){

        if($modelo!=null)
            return ['data' => ['data' => $modelo], 'mensagem' => "ok"];
        else
            return ['data' => ['data' => null],'mensagem' => "sem dados"];
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modelo = new EmailModelo;

        return view('modelo.create', compact('modelo'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ModeloRequest $request)
    {
        $modelo = new EmailModelo();

        $modeloRequest = EmailModelo::create($request->all());

        session()->flash('flash_message', 'Modelo cadastrado com Sucesso!');

        return redirect('modelo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EmailModelo  $emailModelo
     * @return \Illuminate\Http\Response
     */
    public function show(EmailModelo $modelo)
    {
        //
        return view('modelo.show', compact('modelo'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EmailModelo  $emailModelo
     * @return \Illuminate\Http\Response
     */
    public function edit(EmailModelo $modelo)
    {
        //
        return view('modelo.edit', compact('modelo'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EmailModelo  $emailModelo
     * @return \Illuminate\Http\Response
     */
    public function update(ModeloRequest $request, EmailModelo $modelo)
    {
        //
        $modelo->update($request->all());

        session()->flash('flash_message', 'Conta Atualizada com Sucesso');

        return redirect('modelo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EmailModelo  $emailModelo
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmailModelo $emailModelo)
    {
        //
        $deleted = $emailModelo->delete();
        session()->flash('flash_message', 'Modelo deletada com Sucesso!');

        return redirect('modelo');
    }

    public function deleteConfirm(EmailModelo $modelo)
    {
        return view('modelo.confirmDelete', compact('modelo'));
    }
}
