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
		
		<div class='lease-container'>
			<div class='container'>
				<h2 style="color: #744700;">Lease Details</h2>
				
				<?php
					require_once 'login.php';
					
					if(isset($_GET['RenterID'])) {
						$renterID = $_GET['RenterID'];
						$conn = new mysqli($hn, $un, $pw, $db);
						if($conn->connect_error) die($conn->connect_error);
						
					echo "<a href='renter-home.php?RenterID=$renterID' class='btn custom-btn1'>Back</a>";
					
					$query = "SELECT l.LeaseID, l.UnitID, l.StartDate, l.EndDate, u.UnitNumber, u.Price 
							  FROM lease_renter AS lr 
							  JOIN lease AS l ON lr.LeaseID = l.LeaseID 
							  JOIN unit AS u ON l.UnitID = u.UnitID
							  WHERE lr.RenterID = $renterID";

					$result = $conn->query($query);
					
					if($result->num_rows > 0) {
						$row = $result->fetch_assoc();
						echo <<<_END
								<br>
								<pre>
								RenterID: $renterID
								LeaseID: $row[LeaseID]
								UnitID: $row[UnitID]
								UnitNumber: $row[UnitNumber]
								Monthly Rent: $row[Price]
								Start Date: $row[StartDate]
								End Date: $row[EndDate]
								</pre>
								
							_END;
					}
					}
					?>
					
					<a href='SubmitMaintenanceRequest.php?RenterID=<?php echo $renterID?>' class='btn custom-btn1'>Submit a Maintenance Request</a>
			
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