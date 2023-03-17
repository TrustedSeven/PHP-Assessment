<?php

function maxOfArrays($arr1, $arr2, $arr3){
    $max = $arr1[0];
    for($i = 0; $i<count($arr1); $i++){
        if($max<$arr1[$i]){
            $max = $arr1[$i];
        }
    }
    for($i = 0; $i<count($arr2); $i++){
        if($max<$arr2[$i]){
            $max = $arr2[$i];
        }
    }
    for($i = 0; $i<count($arr3); $i++){
        if($max<$arr3[$i]){
            $max = $arr3[$i];
        }
    }

    return $max;
}

function minOfArrays($arr1, $arr2, $arr3){
    $min = $arr1[0];
    for($i = 0; $i<count($arr1); $i++){
        if($min>$arr1[$i]){
            $min = $arr1[$i];
        }
    }
    for($i = 0; $i<count($arr2); $i++){
        if($min>$arr2[$i]){
            $min = $arr2[$i];
        }
    }
    for($i = 0; $i<count($arr3); $i++){
        if($min>$arr3[$i]){
            $min = $arr3[$i];
        }
    }

    return $min;
}

$handle1 = fopen("numbers1.txt", "r");
$handle2 = fopen("numbers2.txt", "r");
$handle3 = fopen("numbers3.txt", "r");

fscanf($handle1, "%s\n",$arr1Str);
fscanf($handle2, "%s\n",$arr2Str);
fscanf($handle3, "%s\n",$arr3Str);

$arr1Str = explode(",", $arr1Str);
$arr2Str = explode(",", $arr2Str);
$arr3Str = explode(",", $arr3Str);

$arr1 = array();
$arr2 = array();
$arr3 = array();

for($i = 0; $i<count($arr1Str); $i++){
    array_push($arr1, $arr1Str[$i]);
    array_push($arr2, $arr2Str[$i]);
    array_push($arr3, $arr3Str[$i]);
}

echo maxOfArrays($arr1, $arr2, $arr3);
echo "\n";
echo minOfArrays($arr1, $arr2, $arr3);

?>