<?php
$word1="Dad";
$word2="Dad";


$split1 = str_split(strtolower($word1));
foreach ($split1 as $key) {
    echo $key ."<br>";
    # code...
}

$split2 = str_split(strtolower($word2));
foreach ($split2 as $key1) {
    # code...
    echo $key1."<br>";

}

if ($split1==$split2){
    echo "Both are the anagram ";
}
else{
    echo "Both are not anagram";
}

// $word3 = "dad";
// echo sort($word3);

?>