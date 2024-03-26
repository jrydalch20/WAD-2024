
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
			<form method='post' action='addRenter.php' class='form-group'>
				<h2 class='text-center'>Create an Account</h2><br>
				
				
				Username:<br>
				<input type='text' name='username'><br>
				Password:<br>
				<input type='password' name='password'><br>
				Last Name:<br>
				<input type='text' name='lastname'><br>
				First Name:<br>
				<input type='text' name='firstname'><br>
				Email:<br>
				<input type='text' name='emailadd'><br>
				Phone:<br>
				<input type='text' name='phonenum'><br><br>
				<input type='submit' value='Create' class='btn custom-btn1'>
				
			
			</form>
		
		</div>
		
		
	
	</body>
</html>

<?php
require_once 'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if(isset($_POST['username'],$_POST['password'], $_POST['lastname'], $_POST['firstname'], $_POST['emailadd'], $_POST['phonenum'])) 
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$lastname = $_POST['lastname'];
	$firstname = $_POST['firstname'];
	$emailadd = $_POST['emailadd'];
	$phonenum = $_POST['phonenum'];
	
	$token = password_hash($password, PASSWORD_DEFAULT);
	
	$query = "insert into renter (Username, Password, LastName, FirstName, EmailAdd, PhoneNum) values ('$username', '$token', '$lastname', '$firstname', '$emailadd', '$phonenum')";
	$result = $conn->query($query);
	if(!$result) die($conn->error);

}

$conn->close();




?>