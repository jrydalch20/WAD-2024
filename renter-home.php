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
		<title>CPM: Renter Home</title>
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
		
		<div class='renter-use-list'>
			<div class='container'>
				<div class='list-group'>
					<?php
						require_once 'login.php';
						
						// Check if RenterID is set in URL 
						if(isset($_GET['RenterID'])) {
							$renterID = $_GET['RenterID'];
							$conn = new mysqli($hn, $un, $pw, $db);
							if($conn->connect_error) die($conn->connect_error);
							
						echo <<<_END
								<a href="renter-details.php?RenterID=$renterID" class="list-group-item list-group-item-action">Personal Info</a>


								<a href='renterLeaseInfo.php?RenterID=$renterID' class='list-group-item list-group-item-action'>Lease Info</a>
								<a href='renterPayments.php?RenterID=$renterID' class='list-group-item list-group-item-action'>Payments</a>
								_END;
						}
							

					
					?>
				
				</div>
			
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