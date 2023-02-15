<?php 

$timestamp = date("U");
$string = " My school is DMACC. ";
$phoneNumber = 1234567890;
$usDollars = 123456;



function getDateFormat($timestamp, $format) {
return date($format, $timestamp);
    
}

function displayStringInput($string) {
 //Display number of characters in the string 
 echo "Number of characters: " . strlen($string) . "<br>";

 //Trim any leading or trailing whitespace
 $string = trim($string);
 echo "After trimming whitespace: " . $string . "<br>";

 //Display the string as all lowercase characters 
 $string = strtolower($string);
 echo "After converting to lowercase: " . $string . "<br>";


 if (stripos($string, "DMACC") !== false) {
    echo "String contains 'DMACC'";
 } else {
    echo "String does not contain 'DMACC'";
 }

}

function formattedNumber($phoneNumber) {
    return "(" . substr($phoneNumber, 0, 3) . ") " . substr($phoneNumber, 3, 3) . "-" . substr($phoneNumber, 6);
}

function formattedCurrency($usDollars) {
   return "$" . number_format($usDollars, 2); 
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unit 4-1: PHP Functions</title>
</head>
<body>
    <h1>4-1: PHP Functions</h1>
    <p>mm/dd/yyyy format: <?php echo getDateFormat($timestamp, "m/d/Y");?></p>
    <p>dd/mm/yyyy format: <?php echo getDateFormat($timestamp, "d/m/Y");?></p>
    <?php echo displayStringInput($string);?>
    <p>Number displayed as formatted phone number: <?php echo formattedNumber($phoneNumber);?></p>
    <p>Number displayed as formatted US currency: <?php echo formattedCurrency($usDollars);?></p>
</body>
</html>