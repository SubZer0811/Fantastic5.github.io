<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "phpmyadmin";
$password = "12345678";
$dbname = "yummy5";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$orders = 'select order_id, ph_no, order_status, hostel from order_';
$result = $conn->query($orders);

// echo '<table><tr><th>Item_name</th><th>Quantity</th></tr>';
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$items = 'select item_id,item_name, quantity from order_details natural join menu where order_id = ' . $row["order_id"] . ';';
		$result1 = $conn->query($items);
	echo '<tr><td>'.$row["order_id"].'</td><td>'. $row["hostel"].'</td></tr>';
	} 

echo '</table>';
}
$conn->close();
?>

</body>
</html>
