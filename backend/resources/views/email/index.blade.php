@extends('layouts.app')

@section('content')
    <div class="container">
    @include('shared.alert')
    <h1>Emails </h1>
    {!! link_to_route('email.create', 'Nova Email', null, [
        'class' => 'btn btn-primary btn-lg',
        'data-remote' => 'true' ]) !!}
        <p></p>
        <p></p>
    <table class="table" >
        <tr>
            <th>Assunto</th>
            <th>Email </th>
            <th>Data Criação </th>

            <th></th>
        </tr>
        @foreach ($emails as $email)
            <tr>
                <td>{!! $email->nome !!}</td>
                <td>{!! $email->email !!}</td>
                <td>{!! $email->created_at !!}</td>
                <td>
                    {!! Form::open(['method' => 'GET', 'route' => ['email.edit', $email->id]]) !!}
                    <button type="submit" class="btn btn-success">Atualizar</button>
                    {!! Form::close() !!}
                </td>
                <td>
                    {!! Form::open(['method' => 'GET', 'route' => ['email.show', $email->id]]) !!}
                    <button type="submit" class="btn btn-primary">Ver</button>
                    {!! Form::close() !!}
                </td>
                <td>
                    {!! Form::open(['method' => 'GET', 'route' => ['email.confirmDelete', $email->id]]) !!}
                    <button type="submit" class="btn btn-danger">Deletar</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    </div>
@endsection