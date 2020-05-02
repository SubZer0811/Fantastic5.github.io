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

$sql = "SELECT order_id from order_details";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
             "<br>Status: ". $row["order_status"].
                  '<form action="" method="POST" name="delivery">'.
                        '<input type="checkbox" name="'. $row[order_id] .'"/>'.
                  "</form>".
                  " <br> </details>";
    }

    echo '<form action="test.php" method="POST" name="delivery">
        <input type="submit" />
    </form>';
} else {
    echo "0 results";
}


</body>
</html>
