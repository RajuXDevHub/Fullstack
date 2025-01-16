<?php
$arr1 = array(1,2,3,4,5,7,5,4,3,2,1);

$arr2 = [ ];

//Removing the duplicate values from the array

for ($i=0; $i <= count($arr1); $i++) { 
    if(!in_array($arr1[$i],$arr2)){ //in_array is a function which checks the value is present in the array or not
        $arr2[]=$arr1[$i];
        
    }
}

foreach ($arr2 as $key) {
    # code...
    echo $key." ";
    
}

//Another way to remove the duplicate values from the array

// $arr2 = array_unique($arr1); //array_unique is a function which removes the duplicate values from the array
// echo "<br>";
// foreach ($arr2 as $key) {
//     # code...
//     echo $key." ";
// }
?>