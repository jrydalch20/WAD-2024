<!DOCTYPE html>
<html>
	<head>
		<title>Add Property</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
		  <style>
				body {
				  font-family: Arial, sans-serif;
				}
				.navbar-brand {
				  font-size: 1.5rem;
				  font-weight: bold;
				}
				.navbar-brand img {
				  width: 40px; /* Adjust size as needed */
				  margin-right: 10px;
				}
			</style>
	</head>
	
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <div class="container">
			<a class="navbar-brand" href="#">
			  <img src="https://via.placeholder.com/40x40" alt="Company Logo">
			  Cowboy Property Management
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
			  <ul class="navbar-nav ml-auto">
				<li class="nav-item active">
				  <a class="nav-link" href="homePage.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="loginPage.php">Login</a>
				</li>
			  </ul>
			</div>
		  </div>
		</nav>
		
	
	
	
	
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form>
                <div class="form-group">
                    <label for="property-name">Property Name:</label>
                    <input type="text" id="property-name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="units">Number of Units:</label>
                    <input type="number" id="units" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="location">Address:</label>
                    <input type="text" id="location" class="form-control" required>
                </div>
				<div class="form-group">
					<input class='btn btn-secondary' type='submit' value="Submit">
				</div>
            </form>
			
			<a href='property-list.php'>Back to list</a>
        </div>
    </div>
</div>

<!-- Bootstrap JS CDN link (optional, for Bootstrap JavaScript features) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
	
	</body>

</html>