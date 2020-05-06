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


$total_norders ="SELECT sum(item_price*quantity) as cost FROM menu natural join order_details ";
$result = $conn->query($total_norders);
$row = $result->fetch_assoc();


echo $row['cost'];
?>
</html>
</body>
