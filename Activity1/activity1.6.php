<?php
//Write a program to add two 4x4 matrixes.

$matrix1 = [
    [1,2,3,4],
    [4,5,6,7],
    [8,9,10,11],
    [12,13,14,15]
];

$matrix2 = [
    [16,17,18,19],
    [20,21,22,23],
    [24,25,26,27],
    [28,29,30,31]
];

for($i = 0; $i < 4; $i++) {
    for($j = 0; $j < 4; $j++) {
        echo $matrix1[$i][$j] + $matrix2[$i][$j]." ";
    }
    echo "</br>";
}

?>