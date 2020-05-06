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


    $query = 'SELECT * FROM menu;';

    $result = $conn->query($query);

    echo '<table><tr><th>Item ID</th><th>Item Name</th><th>Price</th></tr>';
    while($row = $result->fetch_assoc()){
        echo '<tr><td>'.$row['item_id'].'</td><td>'.$row['item_name'].'</td><td>'.$row['item_price'].'</td></tr>';
    }

    $conn->close();

?>