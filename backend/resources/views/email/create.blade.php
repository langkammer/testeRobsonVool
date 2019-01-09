@extends('layouts.app')

@section('content')
    {!! Form::open(['route' => 'email.store',  'id' => 'email-form']) !!}
    @include('email.form', ['salvar' => 'Salvar'])
    {!! Form::close() !!}
@endsection