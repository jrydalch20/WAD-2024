<!DOCTYPE html>
<html>
	<head>
		<title>Property List</title>
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
				  <a class="nav-link" href="homePage.php">Home</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="loginPage.php">Login</a>
				</li>
			  </ul>
			</div>
		  </div>
		</nav>
		
		
		<div class="container">
			<ul class="list-group">
				<li class="list-group-item">
					<a href='property-details.php'>Property 1</a>
				</li>
				<li class='list-group-item'>
					<a href='property-details.php'>Property 2</a>
				</li>
				<li class='list-group-item'>
					<a href='property-details.php'>Property 3</a>
				</li>
			</ul>
		</div>
	
		<div class='container'>
			<a href='AddProperty.php' class='btn btn-secondary btn-lg btn-block' role='button'>Add Property</a>
		</div>
	
	</body>


</html>
