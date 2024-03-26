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
		<title>CPM: Update Details</title>
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
		<div class='container'>
		<?php

		require_once 'login.php';

		$conn = new mysqli($hn, $un, $pw, $db);
		if ($conn->connect_error) die($conn->connect_error);

		if (isset($_GET['EmployeeID'])) {
			echo "EmployeeID found: " . $_GET['EmployeeID'] . "<br>";

			$employeeID = $_GET['EmployeeID'];
			
			echo "<a href='employee-details.php?EmployeeID=$employeeID' class='btn custom-btn1'>Back</a>";

			$query = "SELECT * FROM employee WHERE EmployeeID = $employeeID";

			$result = $conn->query($query);
			if (!$result) die($conn->error);

			if ($result->num_rows > 0) {
				while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
					echo <<<_END
			<form action='updateEmployee.php?EmployeeID=$employeeID' method='post'>
				<pre>
					EmployeeID: $row[EmployeeID]
					Username: <input type='text' name='username' value='$row[Username]'>
					First Name: <input type='text' name='firstname' value='$row[FirstName]'>
					Last Name: <input type='text' name='lastname' value='$row[LastName]'>
					Position: <input type='text' name='position' value='$row[Position]'>
					DOB: <input type='text' name='dob' value='$row[DOB]'>
					Hire Date: <input type='text' name='hiredate' value='$row[HireDate]'>
					Salary: <input type='text' name='salary' value='$row[Salary]'>
					Email: <input type='text' name='emailadd' value='$row[EmailAdd]'>
					Phone: <input type='text' name='phonenum' value='$row[PhoneNum]'>
					
					<input type='hidden' name='update' value='yes'>
					<input type='hidden' name='EmployeeID' value='$row[EmployeeID]'>
					<input type='submit' value='UPDATE RECORD'>
				</pre>
			</form>
		_END;
				}

				if (isset($_POST['update'])) {
					$employeeID = $_POST['EmployeeID'];
					$username = $_POST['username'];
					$firstname = $_POST['firstname'];
					$lastname = $_POST['lastname'];
					$position = $_POST['position'];
					$dob = $_POST['dob'];
					$hiredate = $_POST['hiredate'];
					$salary = $_POST['salary'];
					$email = $_POST['emailadd'];
					$phone = $_POST['phonenum'];
					

					$query = "UPDATE employee SET Username='$username', FirstName='$firstname', LastName='$lastname', Position='$position', DOB='$dob', HireDate='$hiredate', Salary='$salary', EmailAdd='$email', PhoneNum='$phone' WHERE EmployeeID = $employeeID ";

					$result_update = $conn->query($query);
					if (!$result_update) die($conn->error);

					// Redirect back to the referring page
					header("Location: employee-details.php?EmployeeID=" . $employeeID);
					exit;
				}

				$result->close();
			} else {
				echo "No records found for the given EmployeeID.";
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