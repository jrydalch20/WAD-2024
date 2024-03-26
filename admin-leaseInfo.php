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
		<title>CPM: Admin Lease Info</title>
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
		
		<div class='list-container'>
			<div class='container'>
			
				<a href='createLease.php' class='btn custom-btn1'>Create new Lease</a>
				<br><br>
				<ul class='list-group'>
					<?php
					require_once 'login.php';

					$conn = new mysqli($hn, $un, $pw, $db);
					if($conn->connect_error) die($conn->connect_error);

					$query = "SELECT l.LeaseID, l.UnitID, l.EmployeeID, l.StartDate, l.EndDate, u.UnitNumber, u.Price FROM lease AS l JOIN unit AS u ON l.UnitID = u.UnitID ORDER BY LeaseID";
					$result = $conn->query($query);

					if($result->num_rows > 0) {
						while($row = $result->fetch_array(MYSQLI_ASSOC)) {
							echo <<<_END
								<li class='list-group-item list-group-item-active'>
									LeaseID: $row[LeaseID]<br>
									UnitID: $row[UnitID]<br>
									EmployeeID: $row[EmployeeID]<br>
									StartDate: $row[StartDate]<br>
									EndDate: $row[EndDate]<br>
									Unit Number: $row[UnitNumber]<br>
									Rent: $row[Price]<br>
									
									 <a href='updateLeaseInfo.php?LeaseID=$row[LeaseID]' class='btn btn-sm custom-btn1'>Update Lease Info</a>
									 <a href='deleteLeaseInfo.php?LeaseID=$row[LeaseID]' class='btn btn-sm custom-btn1'>Delete Lease</a>
									
									
								</li>
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