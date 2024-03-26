<?php
require_once 'login.php';
require_once 'User-class.php';

$allowedRoles = array('Employee', 'Renter');
session_start();
require_once 'checkSessionsCPM.php';
checkAuthorization($allowedRoles);

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>CPM: Renter Lease Info</title>
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
		<div class='cart-container'>
			<div class='container'>
				<?php

				
				// Check if user is logged in
				if (!isset($_SESSION['username'])) {
					// Redirect to login page if not logged in
					header("Location: login-form.php");
					exit;
				}

				// Retrieve session username
				$username = $_SESSION['username'];

				// Connect to the database
				$conn = new mysqli($hn, $un, $pw, $db);
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}

				// Fetch lease information associated with the renter
				$query = "SELECT l.LeaseID, l.StartDate, l.EndDate, u.UnitNumber, u.Price 
						  FROM lease_renter AS lr
						  JOIN lease AS l ON lr.LeaseID = l.LeaseID
						  JOIN unit AS u ON l.UnitID = u.UnitID
						  JOIN renter AS r ON lr.RenterID = r.RenterID 
						  WHERE r.Username = '$username'";
				$result = $conn->query($query);

				// Check if there are leases associated with the renter
				if ($result->num_rows > 0) {
					// Display lease information and checkbox for selection
					echo "<form action='checkout.php' method='post'>";
					while ($row = $result->fetch_assoc()) {
						echo "<input type='checkbox' name='selected_leases[]' value='" . $row['LeaseID'] . "'>";
						echo "Lease ID: " . $row['LeaseID'] . " | ";
						echo "Unit Number: " . $row['UnitNumber'] . " | ";
						echo "Price: $" . $row['Price'] . "<br>";
					}
					echo "<input type='submit' value='Add to Cart'>";
					echo "</form>";
				} else {
					echo "No leases found for the current user.";
				}

				$conn->close();
				?>
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