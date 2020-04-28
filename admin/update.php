<!DOCTYPE HTML>  
<html>
	<head>
	</head>
	<body>

         <?php  include 'main.php'?> 
		
		<h2>Enter Details of Item to Update</h2>
		<form method="post" action="">  
			item_id: <input type="integer" name="item_id">
			<br><br>
			item_name: <input type="text" name="item_name">
			<br><br>
			price: <input type="integer" name="price">
			<br><br>
			<input type="submit" name="update" value="Submit">  
		
		</form>

		<?php

			function test_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
			

			if ($_SERVER["REQUEST_METHOD"] == "POST"){
    			if(isset($_POST['update'])){

			$item_id = test_input($_POST["item_id"]);
			$item_name = test_input($_POST["item_name"]);
			$price = test_input($_POST["price"]);

			$sql = "UPDATE menu SET item_name='$item_name',item_price= '$price' WHERE item_id='$item_id'";
	
			if ($conn->query($sql) === TRUE) {
			    echo "record updated successfully";
			}
			else{
				echo $conn->error;
			}
			
			}
		}
		
		?>

	</body>
</html>