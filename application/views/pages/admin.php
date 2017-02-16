<?php 
		/*echo var_dump($records);
		echo $json;*/
?>
<!DOCTYPE html>
<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.1/angular.min.js"></script>
<script>
var app = angular.module('myApp', []);
app.controller('messagectrl', function($scope) {
    $scope.msg = <?php echo $json; ?>
});
</script>
</head>
<body>
<div ng-app="myApp" ng-controller="messagectrl">
<table border="1">
<tr ng-repeat="x in msg">
<td>{{x.name}}</td>
<td>{{x.email}}</td>
<td>{{x.message}}</td></tr>
</table>
</div>
</body>
</html>