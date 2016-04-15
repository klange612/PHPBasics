<?php
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta charset = 'utf-8'>	
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>BS1</title>
		 <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		
		<!-- Latest compiled JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
	
	<div class="container-fluid">
		<p>
		<div class="jumbotron">
			<h1>JumboTron section</h1>
			<p>This is the text in the jumbotron</p>
		</div>
		<h1>bs1</h1>
		<div class="row">
			<div class="col-sm-4">
				<p class="bg-danger"> Col 4</p>
				<table class="table table-striped table-bordered">
					<tr><th>Date</th><th>Sales</th><th>total</th></tr>
					<tr><td>June 2006</td><td>100</td><td>$ 1000</td></tr>
				</table>
			</div>
			<div class="col-sm-8" style="background-color:lightgrey">Col 8
				<table class="table table-striped">
					<tr><th>Date</th><th>Sales</th><th>total</th></tr>
					<tr><td>July 2006</td><td>200</td><td>$ 2000</td></tr>
				</table>
				<div class="alert alert-info"><strong>Info:</strong> Just informational, this time</div>
			</div>
		</div>
		<p>
			<div class="progress">
				<div class="progress-bar" role="pbar" aria-valuenow="90" aria-valuemin="0" 
					aria-valuemax="100" style="width: 90%;">90%
				</div>
			</div>
			<button type="button" class="btn btn-success">Go</button>
			<button type="button" class="btn btn-danger btn-lg">Stop</button>
	</div>	
	</body>
</html>