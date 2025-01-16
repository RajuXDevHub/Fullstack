<?php
//Nd array :- It is a array which is having multiple array inside it.

$Nd_array = array(
    array("Rahul", 20, "Delhi"),
    array("Rohit", 21, "Mumbai"),
    array("Raj", 22, "Kolkata")
);

echo $Nd_array[1][0]; //It will print the first element of the first array
echo "<br>";

#3d array
$thr = array(
    array(
        array("Rai",45),
        array("Raju",50)
    ),
    array(
        array("Rahul",20), 
        array("Rohit",21)
    )
    

    );
    echo $thr[0][0][1]; //it will print the secong element of thr first array 
    
    
    #4D Array :- it is a array which is having 3d array inside it . 
    echo $thr[0][0][1]+ $thr[1][0][1]; //It will add the two values

    //Anagram :-
?>