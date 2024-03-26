<?php
require_once 'login.php';
require_once 'User-class.php';

$allowedRoles = array('Employee');
session_start();
require_once 'checkSessionsCPM.php';
checkAuthorization($allowedRoles);

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>CPM: KPI Dash</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<link href="cpm-universal-styles.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
		
		<style>
			
		</style>
		
	</head>
	
	<body>
		<nav class="navbar navbar-expand-lg custom-navbar">
			<div class="container">
			
			    <a class="navbar-brand custom-navbar-item" href="public-home.php">Cowboy Property Management</a>

				
				<div class="collapse navbar-collapse text-center" id="navbarNav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link custom-navbar-item" href="public-home.php" >Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link custom-navbar-item" href="login-form.php" >Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link custom-navbar-item" href="logout.php" >Logout</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
		<br>
		
		<div class="details-container text-center col-md-4 offset-md-4">
			<div class="container">
				
				
				<?php
					require_once 'login.php';
					
					$conn = new mysqli($hn, $un, $pw, $db);
					if($conn->connect_error) die($conn->connect_error);
					
					// Extract data from DB to display later
					$query = "SELECT PropertyID, Sum(Price) AS TotalRent FROM unit GROUP BY PropertyID";
					$result = $conn->query($query);
					
					$total_rent	= 0;
					
					$data = array();
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							$data[$row["PropertyID"]] = $row["TotalRent"];
							$total_rent += $row["TotalRent"];
						}
					}
					
					$data_json = json_encode($data);
					
					
					$conn->close();
					
					echo "<h4 style='color: #744700;'>Total Monthly Rent Revenue: $total_rent</h4>";

				
				?>
				<h4 style="color: #744700;">Total Property Rent per Month</h4>
				
				<canvas id="myChart"></canvas>
				
				
				
				

			
			
			</div>
		</div>
			
			

		<br>
		
		<div class='custom-footer'>
			<div class='container'>
				<p style='color: #744700;'>&copy; 2024 Jacob Rydalch, Taylar Brittain, Peter Lloyd. All rights reserved.</p>
			</div>
		<div>
		
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

		<script>
			// PHP data converted to JavaScript variable
			const data = <?php echo $data_json; ?>;

			// Extract labels (PropertyID) and values (TotalPrice) from the data object
			const labels = Object.keys(data);
			const values = Object.values(data);

			// Get the canvas element
			const ctx = document.getElementById('myChart').getContext('2d');

			// Create the pie chart
			const myPieChart = new Chart(ctx, {
				type: 'pie',
				data: {
					labels: labels,
					datasets: [{
						data: values,
						backgroundColor: [
							'rgba(255, 99, 132, 0.5)', // Red
							'rgba(54, 162, 235, 0.5)', // Blue
							'rgba(255, 206, 86, 0.5)', // Yellow
							'rgba(75, 192, 192, 0.5)', // Green
							'rgba(153, 102, 255, 0.5)', // Purple
							'rgba(255, 159, 64, 0.5)' // Orange
							// Add more colors as needed
						],
					}]
				},
				options: {
					title: {
						display: true,
						text: 'Total Rent by PropertyID'
					}
				}
			});
		</script>
		
	</body>
</html>