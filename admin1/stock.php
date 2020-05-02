<DOCTYPE! HTML>
<html>
<head>
</head>
<body>
     
<form action="", method="post">
	<input id="change" type="submit" name="change_main" value="change"/>
	<label for=change>change stock</label>
	<input id="add" type="submit" name="add_main" value="add"/>
	<label for=add>add to stock</label>
</form>


<?php

$servername = "localhost";
$username = "phpmyadmin";
$password = "12345678";
$dbname = "yummy5";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con -> connect_errno) {
	echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
// exit();
}

	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		if(isset($_POST['change_main'])){
			header("Location: change_stock.php");
		}
		if(isset($_POST['add_main'])){
			header("Location: add_stock.php");
		}
	}
	

?>


</body>
</html>
