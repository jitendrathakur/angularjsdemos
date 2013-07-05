<div class="container">
	<h2>View1</h2>

  	<input type="text" data-ng-model="filter.name"/> {{ filter.name }}   
  
	<h3>Simple Controller</h3>
	<ul>
		<li data-ng-repeat="cust in customers | filter : filter.name">{{cust.name + '-' + cust.city}}</li>
	</ul>

	<br>

	<br>
    
    Name: <br>
	<input type="text" data-ng-model="newCustomer.name" />

    <br>

    City: <br>
	<input type="text" data-ng-model="newCustomer.city" />

	<br>
	<button data-ng-click="addCustomer()">Add Customer</button>
	<br>

	<a href="#/view2">Second</a>

</div>
 