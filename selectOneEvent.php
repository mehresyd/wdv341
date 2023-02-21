<?php

//connect to database
require 'dbConnect.php';
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//SQL command with WHERE clause
$sql = "SELECT name, description FROM wdv341_events WHERE id = 1";  

//prepare statement
$stmt = $conn->prepare($sql);

//execute SQL command/prepared statment
 $stmt->execute();

//process SQL command
$stmt->setFetchMode(PDO::FETCH_ASSOC);

$rowCount = $stmt->rowCount();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WDV341 - Intro PHP</title>
    <style>
        table {
            text-align: left;
            max-width: 500px;
        }

        th,
        td {
            padding: 10px;
        }
    </style>
</head>
<body>
<h1>WDV341 Intro PHP</h1>
    <h2>7-2: Create selectOneEvent.php</h2>
    <p>RESULTS:</p>
    <hr>
    <p>&nbsp;</p>

    <?php
    if($rowCount > 0) { 
        //start of table
        echo "<table border='1'>";
        echo "<tr><th>Name</th><th>Description</th></tr>";

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
           echo "<tr><td>" . $row["name"] . "</td><td>" . $row["description"] . "</td></tr>";  
        } 

        echo "</table>";
        echo "<p>&nbsp;</p>";

    } else {
        //If no rows were returned, display message
        echo "There are no events to display.";
    }

    ?>
</body>
</html>