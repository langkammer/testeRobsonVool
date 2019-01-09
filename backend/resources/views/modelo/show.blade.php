@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="form-group col-md-12">
            {!! Form::label('assunto', 'Assunto de Email:') !!}
            <p>{!! $modelo->assunto !!}</p>
        </div>
        <div class="form-group col-md-12">
        {!! Form::label('corpo', 'Corpo do Email:') !!}
            <p>{!! $modelo->corpo !!}</p>
        </div>
        <a href="{{ route('modelo.index') }}" class="btn btn-info" role="button">Voltar</a>

    </div>
@endsection