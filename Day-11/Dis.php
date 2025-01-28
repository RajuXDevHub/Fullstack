<?php

$init = [0,0];
$point = [5,7,4,3]; //E S W N
$pox = $point[0]- $point[2];
$poy = $point[1]- $point[3];


$tx = pow($pox,2);
$ty = pow($poy,2);

$dis =$tx -$ty;
echo $dis;

?>