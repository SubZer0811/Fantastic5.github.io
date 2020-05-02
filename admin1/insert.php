<!DOCTYPE HTML>  
<html>
	<head>
	</head>
	<body>


	<?php include 'main.php' ?>

		<div class="main" style="left">
		
		<div class="ah2">Enter details of Item to be added</div>
		<br>
		<br>
		<form method="post" action="">  
			<b>Item ID:<br><input type="integer" name="item_id" placeholder="Enter Item ID of new item ...">
			<br><br>
			Item Name:<br><input type="text" name="item_name" placeholder="Enter Item Name of new item ...">
			<br><br>
			Price:<br><input type="integer" name="price" placeholder="Enter Price of new item ...">
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
			if(isset($_POST['insert'])){

				$item_id = test_input($_POST["item_id"]);
				$item_name = test_input($_POST["item_name"]);
				$price = test_input($_POST["price"]);

				$sql = "INSERT INTO menu VALUES ('$item_id','$item_name','$price')";
		
				if ($conn->query($sql) === TRUE) {
					echo "New record created successfully";
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