
<?php

function factorial($digit)
{   
    $fac = 1;
    for ($i = 1; $i <= $digit; $i++) {
        $fac = $fac * $i;
    }
    return $fac;
}

$num1 = 145; 
$clon = $num1;
$sum = 0;

while ($num1 > 0) {
    $digit = $num1 % 10;     
    $facto = factorial($digit);
    $sum = $sum + $facto;    
    $num1 =(int)($num1/10); 
}

echo "This is the sum of all factroial numbers :-". $sum; 
echo"<br>";


if ($clon == $sum){
    echo "This".$sum." is a Strong Number .";
}else{
    echo "This is not a Strong Number.";
}



?>



