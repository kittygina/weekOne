<?php
//sum function 
  function mySum($arrays) {
    //initializing variable
    $total = 0;
    //code
    foreach ($arrays as $array) {
        $total += $array;
    }
    return $total;
}

echo mySum([2,50,4,100]);

?>
