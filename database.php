<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<title>Covid-19</title>
	</head>
	<body>
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
			</div>
		</div>
	</body>
</html>