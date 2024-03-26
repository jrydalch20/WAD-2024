<?php
require_once 'login.php';
require_once 'User-class.php';

$allowedRoles = array('Employee', 'Renter');
session_start();
require_once 'checkSessionsCPM.php';
checkAuthorization($allowedRoles);

// Connect to the database
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header("Location: login-form.php");
    exit;
}

// Initialize $selected_leases to an empty array
$selected_leases = [];

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the selected leases
    if (isset($_POST['selected_leases'])) {
        $selected_leases = $_POST['selected_leases'];
        // Debugging: Print out the contents of $selected_leases
        //echo "Selected leases:<br>";
        //var_dump($selected_leases); // or print_r($selected_leases);
        // Process selected leases
    }

    // Initialize total amount
    $total_amount = 0;

    // Fetch prices of selected leases and calculate total amount
    foreach ($selected_leases as $leaseID) {
        // Prepare and execute query to fetch price of lease from unit table
        $query = "SELECT Price FROM unit WHERE UnitID = (
                    SELECT UnitID FROM lease WHERE LeaseID = $leaseID
                  )";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $total_amount += $row['Price'];
        }
    }

    // You can now use $total_amount as the total payment amount
    //echo "Total Payment Amount: $total_amount<br>";

    // Process payment details
    // You can retrieve payment details from $_POST and process them as needed
    // For example, you can insert payment details into a database
    if (isset($_POST['credit_card'])) {
        $creditCard = hash('sha256', $_POST['credit_card']); // Hash the credit card number

        // Get the current date in YYYY-MM-DD format
        $date = date('Y-m-d');

        // Assuming you have a table named 'payment' with columns 'LeaseID', 'RenterID', 'Date', 'Amount', 'credit_card'
        // Get the renter's ID based on the username stored in the session
        $username = $_SESSION['username'];
        $query = "SELECT RenterID FROM renter WHERE Username = '$username'";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $renterID = $row['RenterID'];

            // Insert payment information into the database
            $query = "INSERT INTO payment (LeaseID, RenterID, Date, Amount, credit_card) VALUES ('$leaseID', '$renterID', '$date', '$total_amount', '$creditCard')";
            if ($conn->query($query) === TRUE) {
                echo "Payment information stored successfully.";
				
				header ("Location: renter-home.php?RenterID=$renterID");
            } else {
                echo "Error: " . $query . "<br>" . $conn->error;
            }
        }

    }
    
} else {
    echo "Error3";
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<link href="cpm-universal-styles.css" rel="stylesheet">
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
		
		<div class='form-container'>
			<div class='container'>
				<h1>Checkout</h1>

				<!-- Display a form for payment details -->
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
					<!-- Display the selected leases -->

					<!-- Add form field for credit card number -->
					<label for="credit_card">Credit Card Number:</label><br>
					<input type="text" id="credit_card" name="credit_card" required><br><br>

					<!-- Add a hidden input to pass the selected leases -->
					<?php foreach ($selected_leases as $leaseID) { ?>
						<input type="hidden" name="selected_leases[]" value="<?php echo $leaseID; ?>">
					<?php } ?>

					<!-- Add a submit button for completing the payment -->
					<input type="submit" name="complete_payment" value="Complete Payment"><br>
					
					<?php 
						echo "Total Payment Amount: $total_amount<br>";
					?>
				</form>
			</div>
		</div>
</body>
</html>
