<!DOCTYPE HTML>  
<html>
	<head>
	</head>
	<body>


	<?php include 'main.php' ?>

		<h2>Enter Details of Item to Add</h2>
		<form method="post" action="">  
			item_id: <input type="integer" name="item_id">
			<br><br>
			item_name: <input type="text" name="item_name">
			<br><br>
			price: <input type="integer" name="price">
			<br><br>
			<input type="submit" name="insert" value="Submit">  
		
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

	</body>
</html>