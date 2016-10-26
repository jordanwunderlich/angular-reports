var database = "data.php";



var app = angular.module("app", []);

app.controller("controller", function($scope, $http) {
	$http.get(database).then(function(response){
		$scope.reports = response.data;
	});

	$scope.addNewReport = function() {
		$scope.reports.push({});
	}

	$scope.saveAll = function() {
		$http({
			method: 'POST', 
			url: database, 
			data: $scope.reports, 
			headers: {'Content-Type': 'application/x-www-form-urlencoded'}
		})
			.success(function(response){
				//console.log(response);
			});
	}
});