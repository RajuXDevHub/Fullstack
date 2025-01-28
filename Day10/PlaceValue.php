<?php

$fri = "aaaabbbcccd";
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
    echo "$char$count";
    // echo ord('c');  /// Ascii Value printing 
}


//Reverse printing (abcd ->zyxw)

//Distance finding 

?>