<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB" lang="en-GB" ng-app="phonecatApp" ng-controller="PhoneListCtrl">
<head>
	<title ng-bind-template="AngularJS Test: {{query}}">AngularJS Test</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="controllers.js" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" href="assets/css/main.css">
	
</head>
<body>

Search: <input ng-model="query">
Sort by:
<select ng-model="orderProp">
  <option value="name">Alphabetical</option>
  <option value="age">Newest</option>
</select>


<ul class="phones">
  <li ng-repeat="phone in phones | filter:query | orderBy:orderProp">
    <span>{{phone.name}}</span>
    <p>{{phone.snippet}}</p>
  </li>
</ul>


<pre>{{phones | filter:query | orderBy:orderProp | json}}</pre>


</body>
</html>