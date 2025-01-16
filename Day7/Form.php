<?php
$numbers = $_POST["number"];

if(!empty($numbers)){
    $count = 1;
    foreach ($numbers as $key ) {
        # code...
        echo "Your  $count numbers is  :- $key <br>";
        $count++;
    }
}

// $numbers = $_POST["number"];
// $count = 1;
// foreach ($numbers as $key ) {
//     # code...
//     echo "Your  $count numbers is  :- $key <br>";
// }

$skills = $_POST["skills"];
foreach ($skills as $key) {
    # code...
    echo "Your skills are :- $key <br>";
}

?>