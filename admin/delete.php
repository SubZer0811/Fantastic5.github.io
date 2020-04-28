<!DOCTYPE HTML>  
<html>
	<head>
	</head>
	<body>

		<?php include 'main.php'?>

		<h2>Enter ID of Item to Delete</h2>
		<form method="post" action="">  
			item_id: <input type="integer" name="item_id">
			<br><br>
			<input type="submit" name="delete" value="Submit">  
		
		</form>

		<?php

			function test_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

			if(isset($_POST['delete'])){

			$item_id = test_input($_POST["item_id"]);

			$sql = "DELETE FROM menu WHERE item_id='$item_id'";
	
			if ($conn->query($sql) === TRUE) {
			    echo "Record deleted successfully";
			}
			else{
				echo $conn->error;
			}
			
			}	
		
		?>

	</body>
</html>