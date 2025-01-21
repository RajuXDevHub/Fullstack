<?php

$fri = "RajuChowdhury";
$frequency = array();

$length = strlen($fri);

for ($i = 0; $i < $length; $i++) {
    $char = $fri[$i]; 
    if (array_key_exists($char, $frequency)) { 
        $frequency[$char]++;  
    } else {
        $frequency[$char] = 1;
    }
}

foreach ($frequency as $char => $count) {
    echo "Character '$char' Frequescy $count times.<br>";
}



?>
