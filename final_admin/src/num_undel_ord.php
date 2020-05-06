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



$total_norders = 'select count(distinct order_id) from order_ where order_status=0';
$result = $conn->query($total_norders);
$row = $result->fetch_assoc();


echo $row['count(distinct order_id)'];
?>
</html>
</body>
