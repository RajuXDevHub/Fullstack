<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>

</head>
<body>
    <?php
    $num = 5;
    $result = 1;

    for ($i=1; $i <= $num; $i++) { 
        $result*=$i;

    }
    echo  "The Factorial no - ".$result;
    ?>
</body>
</html>