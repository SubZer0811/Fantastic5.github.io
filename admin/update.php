<!DOCTYPE HTML>  
<html>
	<head>
	</head>
	<body>

		<?php  include 'main.php'?> 
		<div class="main">
		<div class="ah2">Enter details of item to be updated</div>
		<br>
		<br>
		<form method="post" action="">  
			<b>Item ID:<br><input type="integer" name="item_id" placeholder="Enter Item ID to be updated ...">
			<br><br>
			Item Name:<br><input type="text" name="item_name" placeholder="Enter Item Name to be updated ...">
			<br><br>
			Price:<br><input type="integer" name="price" placeholder="Enter Price to be updated ...">
			<br><br>
			<input type="submit" name="insert" value="Submit">
			</b>
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
		</div>
	</body>
</html>