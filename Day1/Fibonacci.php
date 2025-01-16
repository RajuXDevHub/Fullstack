<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>

</head>
<body>
    <?php
    

    $user_position = 7;
    $posititon_1 =0; 
    $posititon_2 =1; 

    echo " 0 1";

    for ($i=3; $i <$user_position ; $i++) { 
        # code...
        $c = $posititon_1 + $posititon_2;
        echo "$c";
        $posititon_1 = $posititon_2;
        $posititon_2 = $c;


    }
    
    
    ?>
</body>
</html>