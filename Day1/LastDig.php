<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>

</head>
<body>
<?php
    $num1 = 435;
    $num2 = 23456;
    
    $digit1 = $num1 %10;
    $digit2 = $num2 %10;
    // echo $digit1;
    // echo $digit2;
    
    if($digit1>$digit2){
        echo "The bigest last digit is ".$digit1;
    }else{
        echo "The bigest last digit is ".$digit2;
    }
    ?>
</body>
</html>