<?php 
// $_POST stores the post data sent by the form to this page to be processed

$inputPartName = $_POST["inputPartName"]; 

if( isset( $_POST["inputSpecial"]) ) {
    $inputSpecial = $_POST['inputSpecial']; //get the value for the checkbox
} 
else{
    $inputSpecial = "No Special Handling";
}

//if they click the checkbox what do i put in $inputSepcial = "Yes"
//if they dont click the checkbox what do I put in $inputSpecial "No Special Handling"

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
    <h1>Response to the Input Part Name Process</h1>
    <p>Requested Part Name: <?php echo $inputPartName; ?></p>
    <p>Special Handling: <?php echo $inputSpecial; ?></p>
</body>
</html>