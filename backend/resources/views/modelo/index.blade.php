@extends('layouts.app')

@section('content')
    <div class="container">
    @include('shared.alert')
    <h1>Modelos </h1>
    {!! link_to_route('modelo.create', 'Nova Conta', null, [
        'class' => 'btn btn-primary btn-lg',
        'data-remote' => 'true' ]) !!}
        <p></p>
        <p></p>
    <table class="table" >
        <tr>
            <th>Assunto</th>
            <th>Data Criação </th>
            <th></th>
        </tr>
        @foreach ($modelos as $modelo)
            <tr>
                <td>{!! $modelo->assunto !!}</td>
                <td>{!! $modelo->created_at !!}</td>
                <td>
                    {!! Form::open(['method' => 'GET', 'route' => ['modelo.edit', $modelo->id]]) !!}
                    <button type="submit" class="btn btn-success">Atualizar</button>
                    {!! Form::close() !!}
                </td>
                <td>
                    {!! Form::open(['method' => 'GET', 'route' => ['modelo.show', $modelo->id]]) !!}
                    <button type="submit" class="btn btn-primary">Ver</button>
                    {!! Form::close() !!}
                </td>
                <td>
                    {!! Form::open(['method' => 'GET', 'route' => ['modelo.confirmDelete', $modelo->id]]) !!}
                    <button type="submit" class="btn btn-danger">Deletar</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    </div>
@endsection