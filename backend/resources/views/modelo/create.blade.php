@extends('layouts.app')

@section('content')
    {!! Form::open(['route' => 'modelo.store',  'id' => 'modelo-form']) !!}
    @include('modelo.form', ['salvar' => 'Salvar'])
    {!! Form::close() !!}
@endsection