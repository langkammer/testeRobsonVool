<?php

namespace App\Http\Controllers;

use App\Email;
use Illuminate\Http\Request;
use App\Http\Requests\EmailRequest;

class EmailFilaController extends Controller
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
        $emails = Email::all();

        return view('email.index', compact('emails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $email = new Email;

        return view('email.create', compact('email'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmailRequest $request)
    {
        $email = new Email();

        $modeloRequest = Email::create($request->all());

        session()->flash('flash_message', 'Email cadastrado com Sucesso!');

        return redirect('email');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function show(Email $email)
    {
        //
        return view('email.show', compact('email'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\email  $email
     * @return \Illuminate\Http\Response
     */
    public function edit(Email $email)
    {
        //
        return view('email.edit', compact('email'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function update(EmailRequest $request, Email $email)
    {
        //
        $email->update($request->all());

        session()->flash('flash_message', 'Email Atualizado com Sucesso');

        return redirect('email');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function destroy(Email $email)
    {
        //
        $deleted = $email->delete();
        session()->flash('flash_message', 'Email deletada com Sucesso!');

        return redirect('email');
    }

    public function deleteConfirm(Email $email)
    {
        return view('email.confirmDelete', compact('email'));
    }
}
