<?php
/*
$names =["Regina", "Princess", "Dachu"];

$nameCount = count($names);

for ($i=0; $i < $nameCount; $i++) { 
    # code...
    echo $names[$i];
    echo "<br>";
}

$start = 1
$end = 10


for ($i=$start; $i < $end; $i++) { 
    # code...
    echo $start[$i];
    echo "<br>";
}

function myRange($start, $end){

}
echo myRange (1, 20);
*/

/////INDEX ARRAY
$names = ["April", "Summer", "Winter","Penelope"];

$arrcount = count($names);

for ($i=0; $i < $arrcount; $i++) { 
    echo $names[$i]. " is a name in the names array";
    echo "<br>";
}

/////ASSOCIATIVE ARRAY

$associative = [
    "name" => "Regina",
    "age" => 23,
    "location" => "Crossriver"
];
//print_r($associative);
echo "<br>";
//var_dump($associative);
//echo $associative['name']. "<br>";

foreach ($associative as $person => $value) {
    echo $person . " is " . $value . "<br>";
}

////MULTI-DIMENSIONAL ARRAY
$multi = [
    ["Gbenga", "Edmund", "Tunde", "Jennifer"],
    [25,32,31,26],
    ["Delta", "Anambra", "Ogun", "PortHarcourt"]
];
//print_r ($multi) ;
//echo $multi[2][2];

for ($i=0 ; $i < 3 ; $i++ ) { 
    for ($x=0; $x < 4; $x++) { 
        echo $multi[$i][$x] . "<br>";
    }
}
