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
		<title>CPM: Property List</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<link href="cpm-universal-styles.css" rel="stylesheet">
		
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
		<div class='property-list'>
			<div class='container'>
				<h2 style="color: #744700;">Property List</h2>
				<a href='admin-home.php' class='btn custom-btn1'>Back</a>
				<a href='addProperty.php' class='btn custom-btn1'>Add Property</a>
				<a href='KPIdash.php' class='btn custom-btn1'>KPI Dashboard</a>
				
				<br><br>
				
				<ul class='list-group'>
					<?php
						require_once 'login.php';
						
						$conn = new mysqli($hn, $un, $pw, $db);
						if($conn->connect_error) die($conn->connect_error);
						
						$query = "SELECT * FROM property ORDER BY PropertyID";
						$result = $conn->query($query);
						
						if($result->num_rows > 0) {
							while($row = $result->fetch_array(MYSQLI_ASSOC)) {
								echo <<<_END
										<li class='list-group-item list-group-item-active'><a href='properties-details.php?PropertyID=$row[PropertyID]'>Address: $row[StreetAddress] <br> City: $row[City] <br> State: $row[State]</a></li>
										
										_END;
							}
						} else {
							echo "0 results";
						}
						
					$result->close();
					$conn->close();
									
					
					
					
					
					
					
					?>
				</ul>
			</div>
		</div>
		
		<br>
		
		
		<div class='custom-footer'>
			<div class='container'>
				<p style='color: #744700;'>&copy; 2024 Jacob Rydalch, Taylar Brittain, Peter Lloyd. All rights reserved.</p>
			</div>
		<div>
	
	</body>
</html>