<?php
//defining variable holding array of numbers
$arrNums = [4,5,3];
//sum function 
  function sum($arrNums) {
    $num = 0;
    foreach ($arrNums as $arrNum) {
        $num += $arrNum;
    }
    return $num;
}

echo sum($arrNums);

