<?php
//Associative array :- It is a array which is having key value pair

$Associative = array("Name" => "Rahul", "Age" => 20, "City" => "Delhi"); 

var_dump($Associative); //It will print the whole array with all the details

echo"<br>"; //It will print the details in the next line


//Fatcing the details

echo $Associative["Name"];

//Delete the details

unset($Associative["City"]);//City will be deleted
var_dump($Associative);
echo "<br>";
echo "<br>";
echo "<br>";

//Printng the details   
foreach ($Associative as $key => $value) { //Associative array is a array which is having key value pair
    #
    echo "Key is ".$key." and Value is ".$value."<br>";
}
echo "<br>";
echo "<br>";
//Adding the new value

$Associative["Town"]="Kolkata";//New value will be added
var_dump($Associative);

echo "<br>";    
echo "<br>";

//new way to add the value

$Associative[]="Malda"; //Last element will be added
var_dump($Associative);

echo "<br>";

$Associative[]="Howrah";//Last element will be added
var_dump($Associative);

echo "<br>";
$Associative[]="West Bengal"; //Last element will be added
var_dump($Associative);

echo "<br>";    

array_pop($Associative); //Last element will be deleted because of array_pop
var_dump($Associative);

echo "<br>";
arsort($Associative); //It will sort the array in descending order
var_dump($Associative);

echo "<br>";
krsort($Associative); //
var_dump($Associative);
?>