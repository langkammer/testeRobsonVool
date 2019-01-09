@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="form-group col-md-12">
            {!! Form::label('email', 'Email:') !!}
            <p>{!! $email->nome !!}</p>
        </div>
        <div class="form-group col-md-12">
        {!! Form::label('email', 'Email:') !!}
            <p>{!! $email->email !!}</p>
        </div>
        <a href="{{ route('email.index') }}" class="btn btn-info" role="button">Voltar</a>

    </div>
@endsection