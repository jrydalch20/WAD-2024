<?php
require_once 'login.php';
require_once 'User-class.php';

$allowedRoles = array('Employee', 'Renter');
session_start();
require_once 'checkSessionsCPM.php';
checkAuthorization($allowedRoles);

if(isset($_GET['RenterID'])){
	$renterID = $_GET['RenterID'];
} else {
	$renterID = "";
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>CPM: Submit Maintenance Request</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<link href="cpm-universal-styles.css" rel="stylesheet">
		<style>
			.form-container {
				margin-left: 50px;
			}
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
		
		<!--Login Form-->
		<div class='form-container'>
			<form method='post' action='SubmitMaintenanceRequest.php' class='form-group'>
				<br>
				<h2 style="color: #744700;">Submit a Request</h2><br>
				
				<a href='back2.php?RenterID=<?php echo $renterID;?>' class='btn custom-btn1'>Back</a>
				<br>
				
				UnitID:<br>
				<input type='text' name='unitid'><br>
				
				Issue:<br>
				<input type='text' name='issue'><br><br>
				
				<input type='submit' value='Create' class='btn custom-btn1'>
				
			
			</form>
		
		</div>
		
		
	
	</body>
</html>

<?php
require_once 'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if(isset($_POST['unitid'], $_POST['issue'])) 
{
	$unitid = $_POST['unitid'];
	$date = date('Y-m-d');
	$statusid = 1;
	$issue = $_POST['issue'];
	
	
	$query = "insert into maintenance (UnitID, StatusID, Date, Issue) values ('$unitid', '$statusid', '$date', '$issue')";
	$result = $conn->query($query);
	if(!$result) die($conn->error);

}

$conn->close();




?>