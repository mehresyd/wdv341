<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3-1 PHP Basics</title>
    <script>

        let assignmentName = "3-1: PHP Basics";

        let number1 = 2;
        let number2 = 4;
        let total = number1 + number2;

        <?php 
            echo $yourName = "Sydney";
        ?>


    </script>
</head>
<body>
    <h1><script>document.write(assignmentName);</script></h1>
    
    <h2> <?php echo "$yourName"; ?> </h2>

    <p>First Number: <script>document.write(number1);</script></p>
    <p>Second Number: <script>document.write(number2);</script></p>
    <p>Total: <script>document.write(total);</script></p>

    <?php
        $languages = array("PHP", "HTML", "Javascript");

        foreach ($languages as $value) {
            echo "$value <br>";
        }
    ?>
    
</body>
</html>