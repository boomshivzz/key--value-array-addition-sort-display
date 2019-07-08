<?php
$c=array( $arr_typei[0] => $arr_cti[0], $arr_typei[1] => $arr_cti[1], $arr_typei[2] => $arr_cti[2], $arr_typei[3] => $arr_cti[3], $arr_typei[4] => $arr_cti[4]);
$d=array( $arr_typeo[0] => $arr_cto[0], $arr_typeo[1] => $arr_cto[1], $arr_typeo[2] => $arr_cto[2], $arr_typeo[3] => $arr_cto[4], $arr_typeo[4] => $arr_cto[4]);

$type_res=array_add_by_key($c,$d);
//print_r($res);

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
