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
		<title>CPM:Admin Add</title>
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
		
		<!--Login Form-->
		<div class='form-container text-center'>
			<form method='post' action='addEmployee.php' class='form-group'>
				<h2 class='text-center'>Create an Employee</h2><br>
				
				
				Username:<br>
				<input type='text' name='username' required><br>
				Password:<br>
				<input type='password' name='password' required><br>
				Last Name:<br>
				<input type='text' name='lastname' required><br>
				First Name:<br>
				<input type='text' name='firstname' required><br>
				Position:<br>
				<input type='text' name='position' required><br>
				Date of Birth (YYYY-MM-DD):<br>
				<input type='text' name='DOB' pattern="\d{4}-\d{2}-\d{2}" required><br>
				Hire Date (YYYY-MM-DD):<br>
				<input type='text' name='hiredate' pattern="\d{4}-\d{2}-\d{2}" required><br>
				Salary:<br>
				<input type='text' name='salary' required><br>
				Email:<br>
				<input type='text' name='emailadd' required><br>
				Phone:<br>
				<input type='text' name='phonenum' required><br><br>
				<input type='submit' value='Create' class='btn custom-btn1'>
				
			
			</form>
		
		</div>
		
		
	
	</body>
</html>

<?php
require_once 'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if(isset($_POST['username'],$_POST['password'], $_POST['lastname'], $_POST['firstname'], $_POST['position'], $_POST['DOB'], $_POST['hiredate'], $_POST['salary'], $_POST['emailadd'], $_POST['phonenum'])) 
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$lastname = $_POST['lastname'];
	$firstname = $_POST['firstname'];
	$position = $_POST['position'];
	$dob = $_POST['DOB'];
	$hiredate = $_POST['hiredate'];
	$salary = $_POST['salary'];
	$emailadd = $_POST['emailadd'];
	$phonenum = $_POST['phonenum'];
	
	$token = password_hash($password, PASSWORD_DEFAULT);
	
	$query = "insert into employee (Username, Password, LastName, FirstName, Position, DOB, HireDate, Salary, EmailAdd, PhoneNum) values ('$username', '$token', '$lastname', '$firstname','$position','$dob','$hiredate', '$salary', '$emailadd', '$phonenum')";
	$result = $conn->query($query);
	if(!$result) die($conn->error);

}

$conn->close();




?>