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
		<title>CPM: Update Lease Info</title>
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
		
		<br>
		<div class='container'>
		<?php

		require_once 'login.php';

		$conn = new mysqli($hn, $un, $pw, $db);
		if ($conn->connect_error) die($conn->connect_error);

		if (isset($_GET['LeaseID'])) {
			echo "LeaseID found: " . $_GET['LeaseID'] . "<br>";

			$leaseID = $_GET['LeaseID'];
			
			echo "<a href='admin-leaseInfo.php' class='btn custom-btn1'>Back</a>";

			$query = "SELECT * FROM lease WHERE LeaseID = $leaseID";

			$result = $conn->query($query);
			if (!$result) die($conn->error);

			if ($result->num_rows > 0) {
				while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
					echo <<<_END
			<form action='updateLeaseInfo.php?LeaseID=$leaseID' method='post'>
				<pre>
					LeaseID: $row[LeaseID]
					UnitID: $row[UnitID]
					EmployeeID: <input type='text' name='employeeID' value='$row[EmployeeID]'>
					StartDate: <input type='text' name='startDate' value='$row[StartDate]'>
					EndDate: <input type='text' name='endDatecode' value='$row[EndDate]'>
					
					<input type='hidden' name='update' value='yes'>
					<input type='hidden' name='LeaseID' value='$row[LeaseID]'>
					<input type='submit' value='UPDATE RECORD'>
				</pre>
			</form>
		_END;
				}

				if (isset($_POST['update'])) {
					
					$employeeID = $_POST['employeeID'];
					$startDate = $_POST['startDate'];
					$endDate = $_POST['endDatecode'];
					

					$query = "UPDATE lease SET EmployeeID='$employeeID', StartDate='$startDate', EndDate='$endDate' WHERE LeaseID = $leaseID ";

					$result_update = $conn->query($query);
					if (!$result_update) die($conn->error);

					// Redirect back to the referring page
					header("Location: admin-leaseInfo.php?LeaseID=" . $leaseID);
					exit;
				}

				$result->close();
			} else {
				echo "No records found for the given LeaseID.";
			}
		}

		$conn->close();
		?>
		</div>
		
		<!--Footer-->
		<br>
		
		
		<div class='custom-footer'>
			<div class='container'>
				<p style='color: #744700;'>&copy; 2024 Jacob Rydalch, Taylar Brittain, Peter Lloyd. All rights reserved.</p>
			</div>
		</div>
	
	</body>
</html>