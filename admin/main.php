<!DOCTYPE HTML>  
<html lang="en" dir="ltr"><head>
	<meta charset="utf-8">
	<meta name="viewport" content="widht=device-width, initial-scale=1">
	<title>Fantastic 5</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="../css/fixed.css">
	<link rel="stylesheet" href="css/fontawesome.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

  </head>
<body>

	<div class="leftsidenav border border-secondary">
        <ab>Admin Controls: </ab>
		<a href="home.php">Home</a>
		<ab>Orders:</ab>
		<a href="">View Orders</a>
		<ab>Edit Menu: </ab>
		<a href="insert.php">Add New Item</a>
		<a href="update.php">Update Existing Item</a>
		<a href="delete.php">Delete Item</a>
		<a href="#">Update Stock</a>
	</div>

	<?php

	$servername = "localhost";
	$username = "phpmyadmin";
	$password = "12345678";
	$dbname = "yummy5";
	$con = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($con -> connect_errno) {
		echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	// exit();
	}

		if ($_SERVER["REQUEST_METHOD"] == "POST"){
			if(isset($_POST['insert_main'])){
				header("Location: insert.php");
			}
			if(isset($_POST['update_main'])){
				header("Location: update.php");
			}
			if(isset($_POST['delete_main'])){
				header("Location: delete.php");
			}
		}
		

	?>

	<div class="rightsidenav">

		<h2>Current Menu</h2>
		<?php
			$con = mysqli_connect("localhost","root","","test");
			$query = "SELECT * FROM names";

			//execute the query
			$result = mysqli_query($con, $query);

			//iterate through each tuple fetched
			echo "<table>";
			while($row = mysqli_fetch_array($result)){
				echo "<tr><td>".$row['rn']."</td><td>".$row['name']."</td><td><input type=\"radio\" name=\"delete\"/></td></tr>";
			}

			echo"</table>";
			mysqli_close($con);
		?>
	</div>

</body>
</html>
