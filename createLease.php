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
    <title>CPM Admin: Create Lease</title>
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
                    <a class="nav-link custom-navbar-item" href="public-home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-navbar-item" href="login-form.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-navbar-item" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br>

<!-- Lease Form -->
<div class='form-container text-center'>
    <form method='post' action='createLease.php' class='form-group'>
        <h2 class='text-center'>Create a Lease</h2><br>

        UnitID:<br>
        <input type='text' name='unitID' required><br>
        EmployeeID:<br>
        <input type='text' name='employeeID' required><br>
        StartDate (YYYY-MM-DD):<br>
        <input type='text' name='startdate' required><br>
        EndDate (YYYY-MM-DD):<br>
        <input type='text' name='enddate' required><br>
        RenterID:<br>
        <input type='text' name='renterID' required><br>

        <input type='submit' value='Create' class='btn custom-btn1'>
    </form>
</div>

<?php
// Process form submission
if(isset($_POST['unitID'], $_POST['employeeID'], $_POST['startdate'], $_POST['enddate'], $_POST['renterID'])) {
    $unitID = $_POST['unitID'];
    $employeeID = $_POST['employeeID'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $renterID = $_POST['renterID'];

    $conn = new mysqli($hn, $un, $pw, $db);
    if($conn->connect_error) die($conn->connect_error);

    // Insert into lease table
    $query = "INSERT INTO lease (UnitID, EmployeeID, StartDate, EndDate) VALUES ('$unitID', '$employeeID', '$startdate', '$enddate')";
    $result = $conn->query($query);

    if(!$result) {
		echo "Error: " . $conn->error;
	} else {
		// Get the auto-generated LeaseID
		$leaseID = $conn->insert_id;

		// Insert into lease_renter table
		$query = "INSERT INTO lease_renter (LeaseID, RenterID) VALUES ('$leaseID', '$renterID')";
		$result = $conn->query($query);

		if(!$result) {
			echo "Error: " . $conn->error;
		} else {
			echo "Lease created successfully.";
		}
	}

    $conn->close();
}
?>

</body>
</html>
