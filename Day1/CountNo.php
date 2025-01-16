<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count No</title>

</head>
<body>
    <?php
    $num = 435;
    $count = 0;
    while ($num != 0 ) {
        # code...
        
        $num= (int)($num/10);
        $count++;
    }
    echo"The No of digits is ;- $count";
    ?>
</body>
</html>