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
    <h2>Date Handling in PHP using PHP Functions</h2>
    <p><?php echo date("U"); ?></p>
    <p><?php echo date("n/d/Y"); ?></p>
    <p>Expected Delivery Date: 
        <?php
        $deliveryDate = date_create("2023-01-20");
       echo  date_format($deliveryDate, "l n/d/Y");
        ?>
    </p>
</body>
</html>

