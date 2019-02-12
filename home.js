var app=angular.module("myApp", ["ngRoute"]);

app.config(function($routeProvider, $locationProvider){

           $locationProvider.hashPrefix('');
            $routeProvider.when("/sample/:code", {
              templateUrl:"movielookup.php",
              controller:"infoController"
            });

});

app.controller("infoController", function($scope, $routeParams){

  $scope.viewInfoID = $routeParams.code;

});