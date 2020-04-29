<!DOCTYPE HTML>  
<html>
	<head>
	</head>
	<body>

		<?php include 'main.php'?>
		<div class="main">
		<div class="ah2">Enter ID of item to be deleted</div>
		<br>
		<br>
		<form method="post" action="">  
			<b>
			Item ID:<br><input type="integer" name="item_id" placeholder="Enter Item ID to be deleted ...">
			<br><br>
			<input type="submit" name="delete" value="Submit">  
			</b>
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
		</div>
	</body>
</html>