<!-- update program:this is  like adding the extra quantity of stock to the existing stock  value -->
<!DOCTYPE HTML>  
<html>
	<head>
	</head>
	<body>

         <?php  include 'stock.php'?> 
		
		<h2>Enter Details of Item to Update the stock </h2>
		<form method="post" action="">  
			item_id: <input type="integer" name="item_id">
			<br><br>
			quantity to be added: <input type="integer" name="quantity">
			<br><br>
			<input type="submit" name="update_stock" value="Submit">  
		
		</form>

		<?php

			function test_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
			

			if ($_SERVER["REQUEST_METHOD"] == "POST"){
    			if(isset($_POST['update_stock'])){

			$item_id = test_input($_POST["item_id"]);
			$quantity = test_input($_POST["quantity"]);

			$sql = "UPDATE stock SET total_quantity = total_quantity+'$quantity' WHERE item_id='$item_id'";
	
			if ($conn->query($sql) === TRUE) {
			    echo "record updated successfully";
			}
			else{
				echo $conn->error;
			}
			// echo "stock update:".$sql;
			}
		}
		
		?>

	</body>
</html>
