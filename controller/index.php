
<!DOCTYPE html>
<html data-ng-app="listApp">
  <head >
  	<title>Hello</title>
  	<script src="angular.min.js" type="text/javascript"></script>
  </head>
  <body>
  	<input type="text" data-ng-model="name"/> {{ name }}

  	<div class="container" data-ng-init="customers = [{'name' : 'jitz', 'city' :'indore'}, {'name' : 'lolo', 'city' :'polo'}]">

  		<h3>Looping records</h3>
  		<ul>
  			<li data-ng-repeat="cust in customers | filter : name">{{ cust.name + '-' + cust.city }}</li>
  		</ul>


  	</div>


 
  	<div class="container" data-ng-controller="SimpleController">
  		<h3>Simple Controller</h3>
  		<ul>
  			<li data-ng-repeat="cust in people | filter : name">{{cust.name + '-' + cust.city}}</li>
  		</ul>

  	</div>

  	<script>

  	/*function SimpleController($scope) {

  		$scope.people = [
	  		{name : 'jitz', city : 'jabalpur'},
	  		{name : 'nilz', city : 'nagpur'},
	  		{name : 'arpita', city : 'jodhpur'},
	  		{name : 'mamla', city : 'indore'}
	  	];
  	}*/

  	var listApp = angular.module('listApp', []);

  	/*function SimpleController($scope) {

  		$scope.people = [
	  		{name : 'jitz', city : 'jabalpur'},
	  		{name : 'nilz', city : 'nagpur'},
	  		{name : 'arpita', city : 'jodhpur'},
	  		{name : 'mamla', city : 'indore'}
	  	];
  	}*/

  	var controllers = {};

  	controllers.SimpleController = function($scope) {

  		$scope.people = [
	  		{name : 'jitz', city : 'jabalpur'},
	  		{name : 'nilz', city : 'nagpur'},
	  		{name : 'arpita', city : 'jodhpur'},
	  		{name : 'mamla', city : 'indore'}
	  	];

	};

	listApp.controller(controllers);

  	</script> 
  </body>
</html>
