<?php
$list = array("Dog", "Cat", "Duck", "Bird");
// array_pop(sort($list));
rsort($list);
array_pop($list);
foreach ($list as $key => $val) {
    echo " " . $val . "\n";
}

?>