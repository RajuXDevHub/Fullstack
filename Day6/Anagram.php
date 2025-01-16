<?php
    $word1= "raju";
    $word2= "jura";

    echo strlen($word1); // to get  the length of the variable 

    echo"<br>";
    if ( strlen($word1)==strlen($word2) ){
        echo "both have same length so it's possible "; 


    }
    
    $splt1=str_split($word1);

    foreach ($splt1 as $key  ) {
        # code...
        echo $key."<br>";
    }

    $splt2=str_split($word2);  
    foreach ($splt2 as $keys  ) {
        # code...
        echo $keys."<br>";
    }

    echo sort($splt1);
    echo sort($splt2);

    if ($splt1 == $splt2) {
        echo "The words are anagrams.";
    } else {
        echo "The words are not anagrams.";
    }
    

    
    
?>