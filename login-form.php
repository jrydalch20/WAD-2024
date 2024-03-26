<?php

require_once 'login.php';
require_once 'User-class.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $tmp_username = mysql_entities_fix_string($conn, $_POST['username']);
    $tmp_password = $_POST['password']; // No need to sanitize here

    // Check if the user exists in the renter table
    $query_renter = "SELECT RenterID, Password FROM renter WHERE Username = ?";
    $stmt_renter = $conn->prepare($query_renter);
    $stmt_renter->bind_param("s", $tmp_username);
    $stmt_renter->execute();
    $stmt_renter->store_result();

    if ($stmt_renter->num_rows == 1) {
        $stmt_renter->bind_result($renterID, $passwordFromDB);
        $stmt_renter->fetch();

        if (password_verify($tmp_password, $passwordFromDB)) {
            // Successful login for renter
            session_start(); // Start the session
            $_SESSION['username'] = $tmp_username; // Store username in session
            $_SESSION['role'] = 'Renter'; // Store role in session
            $user = new User($tmp_username); // Create User object

            // Redirect to renter-home.php
            header("Location: renter-home.php?RenterID=" . $renterID);
            exit;
        } else {
            echo "Login error: Incorrect password.";
        }
    } else {
        // Check if the user exists in the employee table
        $query_employee = "SELECT EmployeeID, Password FROM employee WHERE Username = ?";
        $stmt_employee = $conn->prepare($query_employee);
        $stmt_employee->bind_param("s", $tmp_username);
        $stmt_employee->execute();
        $stmt_employee->store_result();

        if ($stmt_employee->num_rows == 1) {
            $stmt_employee->bind_result($employeeID, $passwordFromDB);
            $stmt_employee->fetch();

            if (password_verify($tmp_password, $passwordFromDB)) {
                // Successful login for employee
                session_start(); // Start the session
                $_SESSION['username'] = $tmp_username; // Store username in session
                $_SESSION['role'] = 'Employee'; // Store role in session
                $user = new User($tmp_username); // Create User object

                // Redirect to employee-home.php or wherever you want to redirect
                header("Location: admin-home.php?EmployeeID=" . $employeeID);
                exit;
            } else {
                echo "Login error: Incorrect password.";
            }
        } else {
            // No user found in renter or employee table
            echo "Login error: User not found.";
        }
    }

    $stmt_renter->close();
    $stmt_employee->close();
}

$conn->close();

function mysql_entities_fix_string($conn, $string) {
    return htmlentities(mysql_fix_string($conn, $string));
}

function mysql_fix_string($conn, $string) {
    $string = stripslashes($string);
    return $conn->real_escape_string($string);
}
?>





<!DOCTYPE html>
<html>
	<head>
		<title>Cowboy Project Management: Login</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<link href="cpm-universal-styles.css" rel="stylesheet">
		<style>
			
		</style>
		
		
	</head>
	
	<body>
		<!--Navigation Bar-->
		<nav class="navbar navbar-expand-lg custom-navbar">
			<div class="container">
			
			    <a class="navbar-brand custom-navbar-item" href="public-home.php">Cowboy Property Management</a>

				
				<div class="collapse navbar-collapse text-center" id="navbarNav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link custom-navbar-item" href="public-home.php" >Home</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link custom-navbar-item" href="login-form.php" >Login </a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
		<br>
		
		<!--Login Form-->
		<div class='form-container text-center'>
			
				<form method='post' action='login-form.php' class='form-group'>
					<h2 class='text-center'>Login</h2><br>
					
					
					Username:<br>
					<input type='text' name='username' required><br>
					Password:<br>
					<input type='password' name='password' required><br><br>
					<input type='submit' value='Login'>
					
				
				</form>
			
			<br>
			
			
			<a class='btn custom-btn1' href='addRenter.php'>Create an Account</a>
		</div>
		
		
	
	</body>
</html>


