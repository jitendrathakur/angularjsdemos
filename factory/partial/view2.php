
	<h2>View2</h2>

  	<input type="text" data-ng-model="filter.name"/> {{ filter.name }}   
  
	<h3>Simple Controller</h3>
	<ul>
		<li data-ng-repeat="cust in customers | filter : filter.name">{{cust.name + '-' + cust.city}}</li>
	</ul>
