<?php
$string = "AKU SUKA MAKAN NASI PADANG";
$arr= explode(" ",$string);

function joinReverse($word) {
    $end = [];
    for ($i=0; $i < count($word); $i++) {
        $end[] = implode(' ', array_slice($word, 0, $i+1));
    }
    return $end;
}  
$result = [];
$result = array_merge($result, joinReverse($arr));
$result = array_merge($result, joinReverse(array_reverse($arr)));

print_r($result);