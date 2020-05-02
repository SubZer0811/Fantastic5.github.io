<!DOCTYPE HTML>  
<html>
<head>
</head>
<body> 

<form action="", method="post">
	<input id="insert" type="radio" name="option" value="insert"/>
	<label for=insert>Add new Item</label>
	<input id="update" type="radio" name="option" value="update"/>
	<label for=update>Update existing Item</label>
	<input id="delete" type="radio" name="option" value="delete"/>
	<label for=delete>Delete Existing Item</label>
	<input type="submit" value="Submit"/>

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
		
		switch ($_POST['option']) {
			case 'insert':
				header("Location: insert.php");
				break;
			case 'update':
				header("Location: update.php");
				break;
			case 'delete':
				header("Location: delete.php");
				break;
			default:
				break;
		}
	}
	

?>

</body>
</html>
