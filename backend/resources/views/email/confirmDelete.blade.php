@extends('layouts.app')

@section('content')
    <div class="container center-block">
        <div class="form-group col-md-12">    
            <h4> Assunto : {!! $email->nome !!}</h4>
            <h4> Msg : {!! $email->email !!} </h4>
            <p>Tem Certeza que você deseja deltar esse Email?</p>

            {!! Form::open(['method' => 'DELETE', 'route' => ['email.destroy', $email->id]]) !!}
            <button type="submit" class="btn btn-danger">Deletar</button>
            <a href="{{ route('email.index') }}" class="btn btn-info" role="button">Voltar</a>
            {!! Form::close() !!}
        </div>
    </div>

@endsection