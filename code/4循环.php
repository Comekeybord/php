<?php
/*
For
While
Do...while
Foreach 
 */


// // for 循环
// for ($i = 0; $i < 10; $i++) {
//     echo $i;
//     echo "<br>";
// }

// // while循环
// $i = 0;
// while ($i < 10) {
//     echo $i;
//     echo "<br>";
//     $i++;
// }

// // do...while
// $i = 0;
// do {
//     echo $i;
//     echo "<br>";
//     $i++;
// } while ($i < 10);

// foreach 主要应用于下标数组 
$people = ["Henry", "Elyse", "Bucky"];
foreach ($people as $person) {
    echo $person . "<br>";
}
$people = [
    "Henry" => "Henry.com",
    "Elyse" => "Elyse.com",
    "Bucky" => "Bucky.com",
];
foreach ($people as $name => $web) {
    echo $name . ":" . $web . "<br>";
}
