<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    <link rel="stylesheet"  href="css/project1.css">
   
	<title>Document</title>
	<!-- <link rel="shortcut icon" type="text/css" href="Manchuu.png"> -->
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<form onsubmit="start(event)">
					<div class="row">
						<div class="f1">
				 		  <div class="col-md-5">
				 			<br>
				 				<b>Lucky Draw Number
				 					 
				 					<input type="number" id="min_no" placeholder="min" name="quantity" min="1" max="1000" required>
				 					<input type="number" id="max_no" placeholder="max" name="quantity" min="1" max="1000" required>
			   					
							</div >
				 		</div>
				 		<div class="col-md-5">
		 					<br>
	         				Time
	         				<!-- <input type="number" name="quantity" placeholder="hr" min="1" max="1000">  -->
	         				<input type="number" name="quantity" placeholder="mm" min="0" max="59" id="selected_minute" required>
	         				<input type="number" name="quantity" placeholder="ss" min="0" max="59" class="second" id="selected_second" required>
	         			</div>
		 				<div class="col-md-2">
		 					<br>
		 				  	<div class="second">
		 				  		<div class="btn-group btn-toolbar">
									<!-- <button class="btn btn-primary">Start</button> -->
									<input type="submit" class="btn btn-primary" value="Start">
							    </div>
							</div>
		 				</div>
				 	</div>
				</form>
			 	<br>
			 	<div class="row">
					<div class="col-md-4">
						<div class="logo">
							<img src="logo.jpg" width="300px">
						</div>
					</div>
					<div class="col-md-4">
						<h1 class="number1 count" id="result">143</h1>
						<h1 class="number2" id="countdown_timer">00:00</h1>
						<h3 class="number3">Lucky Number</h3>
				        <div class="aa">
				        	<!-- <h1 id="result2" style="margin-left: 30px">22</h1> -->
				        	<input type="text" id="result2">
				        </div>
					</div>
					<div class="col-md-4">
						<div class="logo">
							<img src="logo.jpg" width="300px">
						</div>
					</div>
				</div>
				<br>
				<!-- <div class="row">
					<div class="col-md-offset-6">
						<div class="btnn">
							<div class="btn-group btn-toolbar">
							<a href="#" class="btn btn-primary">Save</a>
						    </div>
						</div>
					</div>
				</div> -->
			</div>
			<div class="col-md-3">
				<div class="row">
					<div class="col-md-12">
						<div class="well">
							<h2>Record List</h2>
							<table class="table table-striped table-bordered" id="result_table">
							<thead>
								<tr>
									<th>No</th>
									<th>Lucky Number</th>
								</tr>
							</thead>
							<tbody id="tbody">
								<tr>
									<td></td>
									<td>No Record!!</td>
								</tr>
							</tbody>
						</table>
						</div>

						
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<!-- <script src="js/jquery.min.js"></script> -->
	<!-- <script type="js/bootstrap.min.js"></script> -->
	<!-- Latest compiled and minified JavaScript -->
		 <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- 

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script> -->


	<script src="index.js"></script>

</body>
</html>