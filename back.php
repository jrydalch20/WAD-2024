<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start(); // Start the session

// Check if the user is logged in and has a role set
if (isset($_SESSION['role'])) {
    // Check the user's role
    $userRole = $_SESSION['role'];
    
    // Check if RenterID is present in the current page's URL
    $renterID = isset($_GET['RenterID']) ? $_GET['RenterID'] : "";

    // Debug: Check role and RenterID values
	print_r($_GET);
    echo "User Role: $userRole<br>";
    echo "RenterID: $renterID<br>";
    
    // Redirect the user based on their role
    if ($userRole == 'Renter') {
        // Redirect to renter-home.php with RenterID parameter
        if (!empty($renterID)) {
            header("Location: renter-home.php?RenterID=$renterID");
        } else {
            echo "What the fuck";
        }
        exit;
    } elseif ($userRole == 'Employee') {
        // Redirect to employee-home.php or admin-home.php, adjust as needed
        header("Location: admin-home.php");
        exit;
    }
}

// If the user's role is not set or unknown, redirect to the login page
header("Location: login-form.php");
exit;
?>
