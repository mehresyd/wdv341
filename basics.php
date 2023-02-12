<?php
    /*
        MVC Design pattern used in a lot of application development
        M-  Model    this is your data, databases, stored data, variables and content
        V - View     this is the HTML, keep as much PHP OUT of the view as possible
                     the main PHP in the view is "echo"
        C - Controller   this is the program business Logic, where you do most of your work

        1. keep as much PHP code at the top of the page!
        2. define and assign variables at the top of the page, whenever possible!
    */

    //when you define a variable you MUST assign it a value
    $firstName = "Mary"; //global scope
    $lastName = "Smith"; //global scope

    //PHP will process $variables even inside of quotes! Unique to PHP!

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
    <h1>WDV341 Intro PHP</h1>
    <h2>PHP Basics and Functions</h2>
    <p>Welcome <?php echo $firstName; echo " "; echo $lastName; ?>,</p>
    <p>Welcome <?php echo $firstName .  " " . $lastName; ?>,</p>
    <p>Welcome <?php echo "$firstName $lastName"; ?>,</p>


</body>
</html>