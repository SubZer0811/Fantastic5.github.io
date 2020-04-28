<!DOCTYPE HTML>  
<html>
<head>
</head>
<body> 

<form action="", method="post">
	<input id="insert" type="submit" name="insert_main" value="insert"/>
	<label for=insert>Add new Item</label>
	<input id="update" type="submit" name="update_main" value="update"/>
	<label for=update>Update existing Item</label>
	<input id="delete" type="submit" name="delete_main" value="delete"/>
	<label for=delete>Delete Existing Item</label>

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

</body>
</html>
