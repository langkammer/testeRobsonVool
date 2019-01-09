'use strict';
angular.module('testeRobsonVool',
    ['ui.bootstrap']
)
.controller('EmailController', ['$scope',function($scope) {

    console.log("EmailController ... ");
    


}])
.controller('ModelController', ['$scope',function($scope) {

    console.log("ModelController ");

}])
.config(function($interpolateProvider) {

    $interpolateProvider.startSymbol('@{');
    $interpolateProvider.endSymbol('}');
});

