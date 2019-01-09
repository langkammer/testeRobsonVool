@extends('layouts.app')

@section('content')
    {!! Form::model($modelo, ['method' => 'PATCH', 'route' => ['modelo.update', $modelo->id], 'id' => 'modelo-form']) !!}
    @include('modelo.form', ['salvar' => 'Atualizar modelo'])
    {!! Form::close() !!}
@endsection