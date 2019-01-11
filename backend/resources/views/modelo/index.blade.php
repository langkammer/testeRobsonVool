@extends('layouts.app')

@section('content')
    <div class="container">
    @include('shared.alert')
    <h1>Modelos </h1>
    {!! link_to_route('modelo.create', 'Nova Modelo', null, [
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
                    <div class="row">
                        <div class="col-md-3">
                            {!! Form::open(['method' => 'GET', 'route' => ['modelo.enviar', $modelo->id]]) !!}
                            <button type="submit" class="btn btn-warning btn-block">Enviar</button>
                            {!! Form::close() !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::open(['method' => 'GET', 'route' => ['modelo.edit', $modelo->id]]) !!}
                            <button type="submit" class="btn btn-success btn-block">Atualizar</button>
                            {!! Form::close() !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::open(['method' => 'GET', 'route' => ['modelo.show', $modelo->id]]) !!}
                            <button type="submit" class="btn btn-primary btn-block">Ver</button>
                            {!! Form::close() !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::open(['method' => 'GET', 'route' => ['modelo.confirmDelete', $modelo->id]]) !!}
                            <button type="submit" class="btn btn-danger btn-block">Deletar</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
    </div>
@endsection