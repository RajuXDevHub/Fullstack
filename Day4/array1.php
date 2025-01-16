<?php

//Declaration 
$arr1 = [1,2,3,4,5,6,7];
// $echo "$arr1"; // is not possible 

for($i = 0; $i<=6; $i++){
    echo $arr1[$i]." ";
}
echo "<br>";
//Dynamic in nature
$arr2 = [1,2,3,4,"Raju","rai"];
for ($i=0; $i <=5 ; $i++) { 
    echo $arr2[$i]." ";
}
echo "<br>";
//Length of an array
echo count($arr2);

echo "<br>";    

//For each loop 

$arr3 = [1,2,3,4,5,6];
foreach ($arr3 as $ele) {
    # code...
    echo $ele." ";
}

echo "<br>";

// It will the whole array in a single view with all the details
var_dump($arr3);
echo "<br>";

//Fetch the Details
echo $arr3[2];
echo "<br>";

$arr3[2]="Raju";
var_dump($arr3);
echo "<br>";

//Adding new value 
$arr3[]="RR";
var_dump($arr3);

array_splice($arr3,3,2); // 2 element will be deleted from index no 3 
echo "<br>";
var_dump($arr3);

echo "<br>";

//sorting Array
$arr4 = [12,43,54,55,33,23];
sort($arr4); //Ascending Order 
var_dump($arr4);

echo "<br>";
rsort($arr4); //Decending Order
var_dump($arr4);

echo "<br>";
//Ascii A->65 , a->97 
$arr7=array("mayukh","Apple","apple","aan","angry","purple","ben");
sort($arr7); // it will be sorted in lexicographically ,manner in terms of its own ascii value
echo "<br>";
var_dump($arr7);

// 0-9 ->48
$arr8=array("apple","a","A","Apple","aan","aAn","Ana",23,60.34,60,67);
sort($arr8);
echo "<br>";
var_dump($arr8);


?>