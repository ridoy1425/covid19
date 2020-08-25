<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<title>patient records</title>
	</head>
	<body>
		<div class="header_menu">   
    	  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    	  	 <div class="container">
  <a class="navbar-brand" href="#">Covid-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav  ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.html">Home<span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="syndromes.html">Covid-test</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="database.php">Patient Records</a>
      </li>
    </ul>
  </div>
  </div>
</nav>    
    </div>
		<div class="database">
			<div class="container">
				<div class="data_text">
					<h2>Patient Records</h2>
				</div>
				<table class="table">
					<thead>
						<tr>
							<th scope="col">SI No.</th>
							<th scope="col">Age</th>
							<th scope="col">Sex</th>
							<th scope="col">Temperature</th>
							<th scope="col">Assessment Date</th>
							<th scope="col">Assessment Score</th>
							<th scope="col">COVID-19 Result</th>
						</tr>
					</thead>
					<tbody>
						<?php
						
							$con =mysqli_connect('localhost','root','','covid19');
							// $db=mysqli_select_db($con,'covid19');
							$sql="SELECT * from covid_result";
							// id, age, sex, temp, date, result, score
							$query_run=mysqli_query($con,$sql);
							
								while ($row = mysqli_fetch_array($query_run)){
						?>
						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['age']; ?></td>
							<td><?php echo $row['sex']; ?></td>
							<td><?php echo $row['temp']; ?></td>
							<td><?php echo $row['date']; ?></td>
							<td><?php echo $row['result']; ?></td>
							<td><?php echo $row['score']; ?></td>
						</tr>
						<?php
						}
								// $con->close();
						?>
					</tbody>
				</table>
		
	</body>
</html>