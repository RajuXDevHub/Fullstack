<?php
//Sting's


$var1 = ["Raju ","Rai","Dark"];
$var2= "Rai";
echo strlen($var2);

echo "<br>";
echo str_word_count($var2); // count the number of words in a string

echo "<br>";
echo strrev($var2); // reverse the string

echo "<br>";
$var3 = "Raju Rai";
echo str_split($var3); // split the string into an array

echo "<br>";    
echo str_replace("Rai","Chowdhry ",$var3); // replace the string with another string
echo"<br>";

echo str_repeat("Rai",5); // repeat the string a number of times
echo "<br>";


echo $var3[2]; // access the character of the string
echo "<br>";
//Array to string
 implode(",,",$var1);

var_dump($var1); // display the data type and value of the variable
echo "<br>";

//String to array 
$var4 = "Raju Rai";

explode(" ",$var4);
echo var_dump($var4); 

echo "<br>";
//Replace a  perticular letter in a string 
echo $var4[0] = "M";


echo"<br>";

// echo "1".5; // give output error  

echo "1"."1";

echo strtolower($var4); // convert the string into lowercase
echo "<br>";
echo strtoupper($var4); // convert the string into uppercase
echo "<br>";
echo ucfirst($var4); // convert the first character of the string into uppercase
echo "<br>";    






?>