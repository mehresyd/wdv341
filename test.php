<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
         <?php
             echo "let firstName = 'Mary';";
        ?>
        console.log("The Frist Name is: " + firstName);

        let lastName = <?php echo "'Smith'"; ?>;

        console.log("The Last Name is: " + lastName);

        <?php 
            $city = "Ankeny";       //create a PHP variable 
        ?>

        console.log ("The City is: " + <?php echo "'$city'" ?>);



    </script>
</head>
<body>
    <h1>WDV341 Intro PHP</h1>
    <h2>Hello World</h2>
    <h3>PHP code embedded below this heading.</h3>

    <?php
        //PHP code goes here

        // ONLY sends the RESULT of the PHP code to the Response Object

        echo "<p>Hello World!</p>";        //send the string to the Respnose Object 
        echo "<h1>Line of testing!</h1>";

        echo "<ol>
                <li>Line 1</li>
                </ol>";

        echo "<div>Empty Div</div>";


    ?>

    <h3>Welcome Back <?php echo "Sydney"; ?></h3>
    <p>Your curretn city is registered as:  <?php echo $city ?></p>


    <p>Delivered <?php echo "Your package was delivered to $city"; ?>
</body>
</html>
