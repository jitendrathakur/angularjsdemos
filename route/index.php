
<!DOCTYPE html>
<html data-ng-app="demoApp">
  <head >
  	<title>Hello</title>
  	<script src="angular.min.js" type="text/javascript"></script>
  </head>
  <body>
    <!-- place holder where view will place -->
    <div data-ng-view=""></div>
  	

  	<script>

      var demoApp = angular.module('demoApp', []);
      demoApp.config(function ($routeProvider) {

        $routeProvider
            .when('/view1',
              {
                controller:'SimpleController',
                templateUrl : 'partial/view1.php'
              })
            .when('/view2',
              {
                controller:'SimpleController',
                templateUrl: 'partial/view2.php'
              })
            .otherwise({redirectTo: '/view1'});

      });
  

    var controllers = {};

    demoApp.controller('SimpleController', function($scope) {

    		$scope.customers = [
  	  		{name : 'jitz', city : 'jabalpur'},
  	  		{name : 'nilz', city : 'nagpur'},
  	  		{name : 'arpita', city : 'jodhpur'},
  	  		{name : 'mamla', city : 'indore'}
  	  	];


        $scope.addCustomer = function() {
          $scope.customers.push({
            name : $scope.newCustomer.name,
            city : $scope.newCustomer.city
          });
        }

  	});

	 demoApp.controller(controllers);

  	</script> 
  </body>
</html>
