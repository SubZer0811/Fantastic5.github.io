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

$sql = "SELECT order_id,item_name,quantity,hostel,order_status FROM menu NATURAL JOIN order_details 
NATURAL JOIN order_ order by order_id";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
            echo "<details>
            <summary>".$row["order_id"]."</summary>
                  Hostel:". $row["hostel"]. 
                  "<br>Name: ". $row["item_name"].
                  "<br>Quantity: ".$row["quantity"] .
                  "<br>Status: ". $row["order_status"].
		  '<form action="" method="POST" name="delivery">'.
        		'<input type="checkbox" name="'. $row[order_id] .'"/>'.
    		  "</form>".
		  " <br> </details>";
    }

    echo '<form action="" method="POST" name="delivery">
        <input type="submit" name="submit"/>
    </form>';
} else {
    echo "0 results";
}
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["submit"])){
       
        if(isset($_POST['1'])){
        if ($result->num_rows > 0) {
            echo"hi";
            
            // output data of each row
            
            while($row = $result->fetch_assoc()) {
        
        $sql="UPDATE order_ SET order_status=1";
            }
        }
$result=$conn->query($sql);
}
}
}

$conn->close();
?>

</body>
</html>
