<?php

//first im converting two arrays into a single key value pair array
//with key being string and value being numeric

$c=array( $arr_typei[0] => $arr_cti[0], $arr_typei[1] => $arr_cti[1], $arr_typei[2] => $arr_cti[2], $arr_typei[3] => $arr_cti[3], $arr_typei[4] => $arr_cti[4]);
$d=array( $arr_typeo[0] => $arr_cto[0], $arr_typeo[1] => $arr_cto[1], $arr_typeo[2] => $arr_cto[2], $arr_typeo[3] => $arr_cto[4], $arr_typeo[4] => $arr_cto[4]);

$type_res=array_add_by_key($c,$d);
//print_r($res);
//this function does wonders 
//we compare the arrays and add only if the keys are same
// this is acheived in mouth watering fashion
// here we compare both array keys and if the same key is found we add the count or else we just add as a new element 
//finally only one array is returned all its elements plus like elements added and unique elements integrated

function array_add_by_key( $array1, $array2 ) {
    foreach ( $array2 as $k => $a ) {
        if ( array_key_exists( $k, $array1 ) ) {
            $array1[$k] += $a;
        } else {
            $array1[$k] = $a;
        }
    }
    return $array1;
}
		
// but now I wanted only the top 5 elements 
//so I sorted the array and used a loop to print only the elements i needed limited to top 5 by value 
//i stored the results in an array as I could further style the tables using id classes using css

//brain of full stack dev taking baby steps.
//onward
arsort($pro_res);

$x = 0;
$k=0;

while (++$x <= 5)
{
    $key = key($pro_res);
    $value = current($pro_res);
    next($pro_res);
    //echo  $key . " " . $value . '<br>' ;
   if($value!=0)
    {
        $arr_tp[$k]=$key;
        $arr_tpc[$k]=$value;
     }
    $k++;

}


?>
