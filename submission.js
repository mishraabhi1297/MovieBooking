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


var myApp = angular.module('myApp', ['ngAnimate', 'ui.router']);

myApp.config(function($stateProvider, $urlRouterProvider){
	
	$stateProvider
	
	.state('template', {
		url: '/template',
		templateUrl: 'template.php',
		controller: 'myCtrl'
	})
	
	.state('template.movie', {
		url: '/movie',
		templateUrl: 'movietemplate.php'
	})
	
	.state('template.theatre', {
		url: '/theatre',
		templateUrl: 'theatretemplate.php'
	})
	
	.state('template.quantity', {
		url: '/quantity',
		templateUrl: 'quantitytemplate.php',
		controller: 'quantityCtrl'
	})
	
	.state('template.seat', {
		url: '/seat',
		templateUrl: 'seattemplate.php',
		controller: 'seatCtrl'
	})
	
	.state('template.payment', {
		url: '/payment',
		templateUrl: 'paymenttemplate.php'
	});
	
	$urlRouterProvider.otherwise('/template/movie');
	
})

.controller('quantityCtrl', ['$scope', function($scope){
/*$(document).ready(function(){

var quantitiy=0;
    $('.quantity-right-plus').click(function(e){
        e.preventDefault();
        var quantity = parseInt($('#quantity').val()); 
        $('#quantity').val(quantity + 1);
		$scope.formData.quantity = $scope.formData.quantity+1;
    });

    $('.quantity-left-minus').click(function(e){
        e.preventDefault();
        var quantity = parseInt($('#quantity').val());
		if(quantity>0)
		{
			$('#quantity').val(quantity - 1);
			$scope.formData.quantity-=1;
		}
    });
    
});*/

$scope.calculateTotalPrice=function(quantityAdult, quantityChildren, quantitySenior, quantityConcession){
	return ((quantityAdult*18) + (quantityChildren*15) + (quantitySenior*10) + (quantityConcession*12));
};

}])

.controller('seatCtrl', function($scope){
	$scope.data = {};
	$scope.counter = 0;
	$scope.items = [
		{ name: "1A" },
		{ name: "1B" },
		{ name: "1C" },
		{ name: "1D" }
	];
	$scope.checkedNumber = 0;
	$scope.limitNumber = $scope.formData.totalTickets;
	$scope.check = function(item) 
	{
		if (item.checked) 
		{
			$scope.checkedNumber++;
		} 
		else 
		{
		  $scope.checkedNumber--;
		}
	}	
	
	$scope.checking = function(item)
	{
		if (item.checked) 
		{
			$scope.counter=$scope.counter+1;
		} 
		else 
		{
		  $scope.counter=$scope.counter-1;
		}
	}
})

.controller('myCtrl', ['$scope', '$http', function($scope, $http)
{	
	$scope.formData = {};
	
	var bookingId = Math.floor(Math.random()*90000) + 10000;
	
	$scope.processForm = function()
	{
		var url = "bookmovie.php";
		var data = JSON.stringify({id: bookingId, 
			cnum: $scope.formData.cnum, 
			email: $scope.formData.email,
			movieNum: $scope.formData.movie,
			date: $scope.formData.date,
			theatreNum: $scope.formData.theatre,
			showNum: $scope.formData.show,
			ticket: $scope.formData.totalTickets,
			cardType: $scope.formData.cardType,
			cardName: $scope.formData.cardName,
			cardNumber: $scope.formData.cardNumber,
			validTill: $scope.formData.validTill});
		
		$http.post(url, data)
			.then(function(response){
				if(response.data){
					$scope.msg = "Data Inserted";
				}
			},function(response) {
            $scope.msg = "Service not exists";
            $scope.statusval = response.status;
            $scope.statustext = response.statusText;
            $scope.headers = response.headers();
          });
		
		alert("Booking Successful");
	};
	
}]);


