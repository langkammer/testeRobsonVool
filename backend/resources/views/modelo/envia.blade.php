@extends('layouts.app')

@section('content')
    <div class="container" ng-controller="ModelController">
        <div class="panel panel-default">
            <div class="panel-body">
                <input type="hidden" ng-init="inicializaModeloMsg(<?=$modelo->id?>)">
                <h3 class="page-header col-md-12">
                     Assunto do Email :  {!! $modelo->assunto !!}
                </h3>
                <div class="col-md-12">
                <h4>Selecione os Emails Abaixo<h4>    
                <select name="emails" id="emails" class="form-control" ng-model="email" ng-change="mudar()"
                        ng-options="u as u.nome for u in emails" style="width: 100%; height: 34px;"
                        data-placeholder="Escolha email..." >
                    <option></option>
                </select>
                <p>
                    <table class="table" >
                        <tr>
                            <th>Nome</th>
                            <th>Email </th>
                            <th></th>
                        </tr>
                        <tr ng-repeat="email in filaEmail">
                            <td>@{ email.nome }</td>
                            <td>@{ email.email }</td>
                            <td>
                                <button type="submit" ng-click="remove(email)" class="btn btn-danger btn-block">Remover da Lista</button>
                            </td>
                        </tr>
                    </table>
                </p> 
            </div>
            <button type="submit" ng-click="enviar(email)" class="btn btn-success btn-block">Enviar</button>
        </div>
        
        </div>
        <div class="hr">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group col-md-12">
                    <h3> {!! Form::label('corpo', 'Corpo do Email:') !!} </h3>
                        <p>{!! $modelo->corpo !!}</p>
                    </div>
                </div>        
            </div>
        </div>
    </div>
@endsection