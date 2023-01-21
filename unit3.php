<?php 
     $yourName = "Sydney";
     $assignmentName = "3-1: PHP Basics";
     $languages = array("PHP", "HTML", "Javascript");
     foreach($languages as $value) {
     }
     $languages = json_encode($languages);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3-1 PHP Basics</title>
    <script>

        let number1 = 2;
        let number2 = 4;
        let total = number1 + number2;

    </script>
</head>
<body>
    <h1><?php echo htmlspecialchars("<h1>") . $assignmentName . htmlspecialchars("</h1>"); ?></h1>
    
    <h2> <?php echo "$yourName"; ?> </h2>

    <p>First Number: <script>document.write(number1);</script></p>
    <p>Second Number: <script>document.write(number2);</script></p>
    <p>Total: <script>document.write(total);</script></p>

    <script>
        let languages = <?php echo $languages; ?>;
        for (let i=0; i < languages.length; i++) {
            document.write(languages[i] + "<br>");
        }
    </script>

    
</body>
</html>