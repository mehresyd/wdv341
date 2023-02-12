<?php
// model - variables and data content
// controller - the code we write to make things happen

$backgroundColor = "green";
$fontColor = "orange";

function displayFavoriteColor($inColor) {
    //this function will display the users favorite color for their background
    //what data does this function need to do its job? Where can we get it
    //1, pass it in as a parameter - most common 
    //2. use a value in a global variable
    //3. call a database and get the information for a customer
    
    echo $inColor;

}

function returnFavoriteColor($inColor) {
    //this function will return the favorite color passed into it
    return $inColor; 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>

        function changeBackgroundColor(inColor) {
            //function will change the body background color to the input color
            alert("inside changeBackgroundColor()")
            document.querySelector("body").style.backgroundColor = inColor;

        }

        function pageLoad() {
            //this function will process AFTER the doucment object is fully rendered
            
        document.querySelector("button").onclick = function(){
            changeBackgroundColor ("<?php echo $backgroundColor; ?>");
        }
        }


    </script>
</head>
<body onLoad="pageLoad()">
    <h1>WDV341 Intro PHP</h1>
    <h2>UNIT-4 PHP functions - Custom functions</h2>
    <p>Your favorite color is: <?php displayFavoriteColor("teal"); ?></p>
    <p>Your favorite color is: <?php echo returnFavoriteColor("pink"); ?></p>
    <p>
        <button>Change color to Favorite color.</button>
    </p>
</body>
</html>