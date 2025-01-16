<?php
$arr1=array(1,23,4,5,6);
for ($i=0; $i < 4 ; $i++) { 
    # code...
    echo $arr1[$i]." ";
    echo "<br>";
}

var_dump($arr1);
echo"<br>";
array_splice($arr1,1,2);
var_dump($arr1);

?>