<?php
require_once 'login.php';
						
// Check if RenterID is set in URL 
if(isset($_GET['RenterID'])) {
	$renterID = $_GET['RenterID'];
	$conn = new mysqli($hn, $un, $pw, $db);
	if($conn->connect_error) die($conn->connect_error);
	?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>CPM: Renter Payments</title>
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
		
		
		
		<div class='renter-pmt-list'>
			<div class='container'>
			<a href='makePayment.php?RenterID=<?php echo $renterID; ?>' class='btn custom-btn1'>Make a Payment</a>

			
				<ul class='list-group'>
					<?php
						
							
							$query = "SELECT * FROM payment WHERE RenterID = $renterID";
							$result = $conn->query($query);
							
							if($result->num_rows > 0) {
								while($row = $result->fetch_array(MYSQLI_ASSOC)) {
							
									echo <<<_END
											<br>
											<li class='list-group-item list-group-item-active'>
											<a href='paymentDetails.php?RenterID=$renterID'>
												Date: $row[Date]
											
											</a>
											</li>
											_END;
								}
							}
						}
							

					
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