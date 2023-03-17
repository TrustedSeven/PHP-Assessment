<?php
	$a = '4';
    $b = &$a;
    $b = "9$b";
    
    echo $a.", ".$b;
?>