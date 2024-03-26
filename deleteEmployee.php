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
		<title>CPM: Delete Employee</title>
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
		
		<div class='details-container'>
			<div class='container'>
				<?php 

				require_once 'login.php';

				$conn = new mysqli($hn, $un, $pw, $db);
				if ($conn->connect_error) die($conn->connect_error);

				if (isset($_GET['EmployeeID'])) {
					echo "EmployeeID found: " . $_GET['EmployeeID'] . "<br>";
					
					$employeeID = $_GET['EmployeeID'];
					
					echo "<a href='employee-details.php?EmployeeID=$employeeID' class='btn custom-btn1'>Back</a>";
					
					$query = "Select * FROM employee WHERE EmployeeID = $employeeID";
					
					$result = $conn->query($query);
					if (!$result) die($conn->error);
					
					if ($result->num_rows ==1) {
						while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
							echo <<<_END
							<form action='deleteEmployee.php?EmployeeID=$employeeID' method='post'>
								<pre>
									EmployeeID: $row[EmployeeID]
									Username: $row[Username]
									First Name: $row[FirstName]
									Last Name: $row[LastName]
									Position: $row[Position]
									DOB: $row[DOB]
									HireDate: $row[HireDate]
									Salary: $row[Salary]
									Email: $row[EmailAdd]
									Phone: $row[PhoneNum]
									<input type='hidden' name='delete' value='yes'>
									<input type='hidden' name='EmployeeID' value='$row[EmployeeID]'>
									<input type='submit' value='DELETE EMPLOYEE'>
								</pre>
							</form>
							_END;
						}
						if (isset($_POST['delete'])) {
							$employeeID = $_POST['EmployeeID'];
							
							$query = "DELETE FROM employee WHERE EmployeeID='$employeeID'";
							
							$result = $conn->query($query);
							if(!$result) die($conn->error);
							
							header("Location: employee-list.php");
						}
					}
					
					$conn->close();
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