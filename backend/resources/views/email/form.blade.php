@include('shared.alert')
<div class="container" ng-controller="EmailController">
    <div class="form-group col-md-12">
        <h1>Dados da Conta</h1>
    </div>
    <div class="form-group col-md-12">
        {!! Form::label('nome', 'Nome :') !!}
        {!! Form::text('nome', $email->nome, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-md-12">
        {!! Form::label('email', 'Email: ') !!}
        {!! Form::text('email', $email->email, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-md-12">
        {!! Form::submit($salvar, ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('email.index') }}" class="btn btn-info" role="button">Voltar</a>
    </div>
</div>