<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reversal Nomber's </title>

</head>
<body>
    <?php
    $num = 435;
    $Rev = 0;
    while ($num !=  0 ) {
        # code...
        $digit = $num %10;
        $Rev = ($Rev *10) + $digit;
        $num = (int)($num / 10);
    }
    echo"The Reversed No  is ;- ".$Rev;
    ?>
</body>
</html>