<?php
$var = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
$name = "raju";

for ($i=0; $i <strlen($name) ; $i++) { 
    
   for ($j=0; $j <count($var); $j++) { 
    # code...
    if($var[$j]==$name[$i]){
        echo $name[$i].(string)($j+1)." ";
    }
   }
}


?>