<?php

function stringAnalyzer($arrInput){
    var_dump($arrInput);
      // Convert array to an array of string lengths
    $lengths = array_map('strlen', $arrInput);

    // Show min and max string length
    echo "The shortest is " . min($lengths);
    echo "\nThe longest is " . max($lengths);
}
$handle = fopen("users.txt", "r");
fscanf($handle, "%s\n",$arr1Str);
$arr1Str = explode(",", $arr1Str);
$arr1 = array();
for($i = 0; $i<count($arr1Str); $i++){
    array_push($arr1, $arr1Str[$i]);
}

stringAnalyzer($arr1);
?>