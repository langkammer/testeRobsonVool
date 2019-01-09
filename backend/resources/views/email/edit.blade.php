@extends('layouts.app')

@section('content')
    {!! Form::model($email, ['method' => 'PATCH', 'route' => ['email.update', $email->id], 'id' => 'modelo-form']) !!}
    @include('email.form', ['salvar' => 'Atualizar email'])
    {!! Form::close() !!}
@endsection