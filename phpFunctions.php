<?php
//get the school name of the customer from the database and store in the variable
$schoolName = "DMACC";

define("SCHOOLNAME", $schoolName); //this change the name of school for each customer

$firstName = "Mary"; //Global scope
$lastName = "Smith"; //Global scope
$schoolName = "ISU"; //Global scope

// define a function in PHP

function displayNames() {
    //PHP functions will ALWAYS look for a local version of a variable. It will NOT automatically look for the global version. 
    //tell the function to use the Global version of a variable
    //ALWAYS end your PHP commands with a ; 
    global $firstName, $lastName;   //tells the fucntion to use the global version of the variable
    echo $firstName;
    echo $lastName;
    echo SCHOOLNAME;
}

function displayInputs($inFirstName) {
    echo $inFirstName;
}


$deliveryDate = date_create("2023-01-20");  //creates a Date/TIME object. 

$formattedDeliveryDate = date_format($deliveryDate, "l n/d/Y");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WDV341 Intor PHP</h1>
    <h2>UNIT -4 PHP Functions and examples</h2>
    <p>Your School: <?php echo SCHOOLNAME; ?></p>
    <p>Thank you to <?php displayNames(); ?></p>


    <p>First Name: <?php displayInputs("Randy"); ?></p> 
    <p>Today is: <?php echo date("l n/d/Y"); ?></p>
    <p>Delivery Date: <?php echo $formattedDeliveryDate; ?></p>
</body>
</html>