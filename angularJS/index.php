<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB" lang="en-GB" ng-app="phonecatApp">
<head>
	<title ng-bind-template="AngularJS Test: {{query}}">AngularJS Test</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>
	<script src="app.js" type="text/javascript" charset="utf-8"></script>
	<script src="controllers.js" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" href="assets/css/main.css">
	
</head>
<body>

  <div class="view-container">
    <div ng-view class="view-frame"></div>
  </div>
  
</body>
</html>