@include('shared.alert')
<div class="container" ng-controller="ModelController">
    <div class="form-group col-md-12">
        <h1>Dados do Modelo</h1>
    </div>
    <div class="form-group col-md-12">
        {!! Form::label('assunto', 'Nome Assunto:') !!}
        {!! Form::text('assunto', $modelo->assunto, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-md-12">
        {!! Form::label('textEnviado', 'Msg Html Enviada: ') !!}
        {!! Form::textarea('corpo', $modelo->corpo, [
                            'id'      => 'corpoId'
        ], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-md-12">
        {!! Form::submit($salvar, ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('modelo.index') }}" class="btn btn-info" role="button">Voltar</a>
    </div>
</div>