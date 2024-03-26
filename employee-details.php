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
		<title>CPM: Employee Details</title>
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
		
		<div class='details-container'>
			<div class='container'>
				<h2 style="color: #744700;">Employee Details</h2>
				<a href='employee-list.php' class='btn custom-btn1'>Back</a>
				<br><br>
				
				
				<?php
				require_once 'login.php';

				// Check if EmployeeID is set in the URL
				if(isset($_GET['EmployeeID'])) {
					$employeeID = $_GET['EmployeeID'];
					$conn = new mysqli($hn, $un, $pw, $db);
					if($conn->connect_error) die($conn->connect_error);

					// Prepare and execute query to select specific row based on EmployeeID
					$query = "SELECT * FROM employee WHERE EmployeeID = $employeeID";
					$result = $conn->query($query);

					if($result->num_rows > 0) {
						$row = $result->fetch_assoc();
						echo <<<_END
								<pre>
								EmployeeID: $row[EmployeeID]
								Username: $row[Username]
								First Name: $row[FirstName]
								Last Name: $row[LastName]
								Position: $row[Position]
								Date of Birth: $row[DOB]
								Hire Date: $row[HireDate]
								Salary: $row[Salary]
								Email: $row[EmailAdd]
								Phone: $row[PhoneNum]
								</pre>
								
								<a href='updateEmployee.php?EmployeeID=$employeeID' class='btn custom-btn1'>Update Details</a>
								<a href='deleteEmployee.php?EmployeeID=$employeeID' class='btn custom-btn1'>Delete User</a>
							_END;
					} else {
						echo "No results found.";
					}

					$result->close();
					$conn->close();
				} else {
					echo "Invalid request.";
				}
				?>
				
				
			</div>
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