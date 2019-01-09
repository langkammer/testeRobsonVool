@extends('layouts.app')

@section('content')
    <div class="container center-block">
        <div class="form-group col-md-12">    
            <h4> Assunto : {!! $modelo->assunto !!}</h4>
            <h4> Msg : {!! $modelo->corpo !!} </h4>
            <p>Tem Certeza que você deseja deltar essa Modelo de Msg Email?</p>

            {!! Form::open(['method' => 'DELETE', 'route' => ['modelo.destroy', $modelo->id]]) !!}
            <button type="submit" class="btn btn-danger">Deletar</button>
            <a href="{{ route('modelo.index') }}" class="btn btn-info" role="button">Voltar</a>
            {!! Form::close() !!}
        </div>
    </div>

@endsection