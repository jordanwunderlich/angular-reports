<?php 
if($_GET["pass"] == "jordan") { ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reports</title>

	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
	<script src="main.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet/less" type="text/css" href="css/styles.less">
	<script src="css/less.min.js" type="text/javascript"></script>

	<link href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABmJLR0T///////8JWPfcAAAACXBIWXMAAABIAAAASABGyWs+AAAAF0lEQVRIx2NgGAWjYBSMglEwCkbBSAcACBAAAeaR9cIAAAAASUVORK5CYII=" rel="icon" type="image/x-icon" />
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
</head>
<body ng-app="app" ng-controller="controller" class="container">
	<h1>Reports</h1>
	<form>
		<div class="row hidden-sm hidden-xs">
			<div class="col-md-3">
				<h3>Folder Name</h2>
			</div>
			<div class="col-md-3">
				<h3>Report Name</h2>
			</div>
			<div class="col-md-3">
				<h3>Email Address</h2>
			</div>
			<div class="col-md-1">
				<h3>Day</h2>
			</div>
			<div class="col-md-1">
				<h3>Time</h2>
			</div>
			<div class="col-md-1">
				<h3>Sent?</h2>
			</div>
		</div>
		<div class="row form-group" ng-repeat="report in reports">
			<div class="col-md-3"><input type="text" class="form-control" ng-model="report.folderName" placeholder="Folder Name"></div>
			<div class="col-md-3"><input type="text" class="form-control" ng-model="report.reportName" placeholder="Report Name"></div>
			<div class="col-md-3"><input type="text" class="form-control" ng-model="report.email" placeholder="Email"></div>
			<div class="col-md-1"><input type="text" class="form-control" ng-model="report.day" placeholder="Day"></div>
			<div class="col-md-1"><input type="text" class="form-control" ng-model="report.time" placeholder="Time"></div>
			<div class="col-md-1"><input type="text" class="form-control" ng-model="report.sent" placeholder="Sent?"></div>
		</div>
		<div class="buttons">
			<button ng-click="addNewReport()" class="btn btn-primary">Add New Report</button>
			<button ng-click="saveAll()" class="btn btn-primary">Save All</button>
		</div>
	</form>
</body>
</html>

<?php 
} else {
	echo 'Access denied.';
}