'use strict';
angular.module('testeRobsonVool',
    ['ui.bootstrap']
)
.controller('EmailController', ['$scope',function($scope) {

    console.log("EmailController ... ");
    


}])
.controller('ModelController', ['$scope','$http',function($scope,$http) {


    $scope.filaEmail = [];

    var modelo = {};

    var fila = {};

    $scope.mudar = function(){
        if(_.find( $scope.filaEmail,{ id :  $scope.email.id})){
            console.log("mesm email");
        }
        else{
            fila = {
                id : $scope.email.id,
                nome : $scope.email.nome,
                email : $scope.email.email,
                idModelo : modelo.id
            }
            $scope.filaEmail.push(fila);

        }
    }

    $scope.remove = function(email){
        if(_.find( $scope.filaEmail,{ id :  email.id}))
            _.remove($scope.filaEmail, { id :  email.id})
    }


    $scope.enviar = function(){
        if($scope.filaEmail <= 0)
            alert("Não existe nenhum email selecionado ");
        else{
            $http.post('enviarJson', $scope.filaEmail).then(
            function(response){
                if(response.data.mensagem == "ok") {
                    alert("Emails foram marcados para envio enquanto isso vc pode continuar a usar o sistema");
                    $(location).attr('href', '../../modelo');
                }


            }).error(function(error){
                console.log(error);
                console.log("debugMe!");
            })
        
            
        }    
    }

    $scope.inicializaModeloMsg = function(idModelo){
        console.log("MODELO",idModelo);
        $http.get('/modelo/json/modelo/' + idModelo).then(function (data) {
            if(data.data.mensagem == "ok"){
                modelo= data.data.data.data;
            }
        }, function (err) {
            console.log(err);
        });

    }
    $scope.emails = [];
    


    function inicializaEmailJson(){
        setTimeout(function(){
			$("#emails").chosen();
        },5);
        
        $http.get('/modelo/json/emails').then(function (data) {
            if(data.data.mensagem == "ok"){
               console.log(data.data.data.data)
               $scope.emails = data.data.data.data;
               setTimeout(function(){
                $('#emails').trigger('chosen:updated');

                 },5);

            }
    
        }, function (err) {
            console.log(err);
        });
    }

    function inicializaComponentsJs(){
        $(document).ready(function() {
            $('#corpoId').summernote();
        });
    }

    inicializaComponentsJs();
    inicializaEmailJson();
}])
.config(function($interpolateProvider) {

    $interpolateProvider.startSymbol('@{');
    $interpolateProvider.endSymbol('}');
});

