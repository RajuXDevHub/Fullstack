<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>

</head>
<body>
    <?php

    //Using 3rd Variable 
        $num1 = 10;
        $num2 = 20;
        // $tem = $num1;
        // $num1 = $num2;
        // $num2 = $tem;
        // echo "The first number is ".$num1."<br>";
        // echo "The first number is ".$num2;
    //WithOut Using 3rd Variable

        $num1=$num1+$num2;
        $num2= $num1-$num2;
        $num1=  $num1-$num2;
        echo "The first number is ".$num1."<br>";
        echo "The first number is ".$num2;
        
    
    ?>
</body>
</html>