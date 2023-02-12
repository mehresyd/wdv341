<?php 

//Model - data - the form data that came with the Request Object

//$_POST[name] = post super global - it is an associative array of the form name value pairs
//$_GET[] = Get Super global 

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];

echo "First Name: $firstName";
echo "Last Name: $lastName";

//Controller - the business Logic/code


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
    <h1>Your form has been processed on the server!</h1>
    <h2>Confirmation page!</h2>
    <p>You entered the following information:</p>
    <p>First Name: <?php echo"$firstName"; ?></p>
    <p>Last Name: <?php echo "$lastName"; ?></p>
    <p><a href="inputForm.html">Return to input form</a></p>
</body>
</html>