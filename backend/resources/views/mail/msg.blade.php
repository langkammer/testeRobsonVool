@extends('layouts.mail')

@section('content')
    <div class="container">
		<h1>Ola  {!! $email->nome !!} ! </h1>
        <div class="form-group col-md-12">
            <p>{!! $modelo->assunto !!}</p>
        </div>
        <div class="form-group col-md-12">
            <p>{!! $modelo->corpo !!}</p>
        </div>
    </div>
@endsection