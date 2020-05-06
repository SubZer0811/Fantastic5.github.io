<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>YummyFoods - Admin</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />

    <style>
            p{
                font-size: 25px;
                text-align : center;
            }
table {
border: 2px solid black;
border-radius:5px;
border-collapse: collapse;
width: 90%;
border-style:solid;
color: #1DC7EA;
font-size: 15px;
text-align: left;
margin-top:40px;
margin-left:50px;
}
th {
font-family:Helvetica;
background-color:#1DC7EA;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
tr:hover {background-color:#ddd;}

.table_small{
    width: 50%;
}

</style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar"  data-color="azure">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        YummyFoods
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a class="nav-link" href="dashboard.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="edit_menu.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Edit Menu</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="orders.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Orders</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="reports.php">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Reports</p>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="dashboard.php"> Dashboard </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="dashboard.html" class="nav-link" data-toggle="dropdown">
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Account</span>
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- End Navbar -->



            <p style:"  font-family:Algerian ">
           <br> Undelivered
            </p>
            

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

if ($_SERVER["REQUEST_METHOD"] == "POST"){

	$query = 'select order_id from order_';
	$res = $conn->query($query);
	if($res->num_rows > 0){
		while($row = $res->fetch_assoc()){
//			echo $row['order_id'];
//			echo $_POST[($row['order_id'])];
			if(isset($_POST[$row['order_id']])){

				$query = 'UPDATE order_ SET order_status = 1 where order_id =' . $row['order_id'];
                $conn->query($query);
                echo 'Order ID: ';
				echo $row['order_id'];
                echo ' Delivered';
                header('Location: undelv_disp_orders.php');
			}
		}
	}
}

// Create connection
$conn1 = new mysqli($servername, $username, $password, $dbname);
$orders = 'select order_id, ph_no, order_status, hostel from order_ where order_status=1';
$result = $conn->query($orders);
if ($result->num_rows > 0) 
{
    echo '<table><tr><th>Order_id</th><th>Hostel</th><th>Order_status</th><th>Order Items</th><th>Confirmation</th></tr>';
		while($row = $result->fetch_assoc()) 
		{
            
			echo '<tr><td>'.$row["order_id"].'</td><td>'.$row["hostel"].'</td><td>'.$row["order_status"].'</td>';
            $items = 'select item_id,item_name, quantity from order_details natural join menu where order_id = ' . $row["order_id"] . ';';
            // $items = 'select item_id, quantity from order_details where order_id = ' . $row["order_id"] . ';';
			$result1 = $conn->query($items);
            
            echo '<td>';
                if($result1->num_rows > 0)
				{
					echo '<table class="table_small"><tr><th>Item_name</th><th>Quantity</th></tr>';
						while($item_row = $result1->fetch_assoc()) 
						{
							echo '<tr><td>'.$item_row["item_name"].'</td><td>'.$item_row["quantity"].'</td></tr>';
						}
							echo '</table>';
				}
			        echo "</td>";
				// // else
				// // {
				// // 	echo '<br>No items';
				// // }
				echo '<td><form action="" method="POST" name='.$row["order_id"].'>'.
                    // '<input type="submit" value='.$row["order_id"].' name="'. $row[order_id] .'"/>'.
                    '<input type="submit" value="Click to confirm delivery" name="'. $row[order_id] .'"/>'.
				"</form></td></tr>";

    } 
    echo '</table>';
} else {
	echo "0 results";
}


$conn->close();
?>

</body>
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
</html>
