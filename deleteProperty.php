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
		<title>CPM: Delete Property</title>
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
				<?php 

				require_once 'login.php';

				$conn = new mysqli($hn, $un, $pw, $db);
				if ($conn->connect_error) die($conn->connect_error);

				if (isset($_GET['PropertyID'])) {
					echo "PropertyID found: " . $_GET['PropertyID'] . "<br>";
					
					$propertyID = $_GET['PropertyID'];
					
					echo "<a href='properties-details.php?PropertyID=$propertyID' class='btn custom-btn1'>Back</a>";
					
					$query = "Select * FROM property WHERE PropertyID = $propertyID";
					
					$result = $conn->query($query);
					if (!$result) die($conn->error);
					
					if ($result->num_rows ==1) {
						while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
							echo <<<_END
							<form action='deleteProperty.php?PropertyID=$propertyID' method='post'>
								<pre>
									PropertyID: $row[PropertyID]
									StreetAddress: $row[StreetAddress]
									City: $row[City]
									State: $row[State]
									Zip: $row[Zip]
								
									<input type='hidden' name='delete' value='yes'>
									<input type='hidden' name='PropertyID' value='$row[PropertyID]'>
									<input type='submit' value='DELETE PROPERTY'>
								</pre>
							</form>
							_END;
						}
						if (isset($_POST['delete'])) {
							$propertyID = $_POST['PropertyID'];
							
							$query = "DELETE FROM property WHERE PropertyID='$propertyID'";
							
							$result = $conn->query($query);
							if(!$result) die($conn->error);
							
							header("Location: properties-list.php");
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