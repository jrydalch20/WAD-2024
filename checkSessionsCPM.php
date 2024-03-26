<?php

// Include the User class if needed
require_once 'User-class.php';

// Function to check if the user is authorized to access the page
function checkAuthorization($allowedRoles = array()) {
    
    
    // Check if the user is logged in
    if (!isset($_SESSION['username']) || !isset($_SESSION['role'])) {
        // Redirect the user to the login page if not logged in
        header("Location: login-form.php");
        exit;
    }
    
    // Check if the user's role is authorized to access the page
    $userRole = $_SESSION['role'];
    if (!in_array($userRole, $allowedRoles)) {
        // Redirect the user to an unauthorized access page or display an error message
        echo "Unauthorized access!";
        exit;
    }
}

?>
