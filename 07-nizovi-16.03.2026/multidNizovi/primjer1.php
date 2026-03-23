<?php

// ============================================================
// HR: MULTIDIMENZIONALNI NIZOVI - niz unutar niza
//     Svaki element vanjskog niza je sam po sebi niz
//     Dohvat elementa: $niz[redak][stupac]
//     Npr: $ucenici[0][0] = "Ana" (prvi učenik, prvo polje)
// EN: MULTIDIMENSIONAL ARRAYS - array inside array
//     Each element of outer array is itself an array
//     Element access: $array[row][column]
//     E.g: $ucenici[0][0] = "Ana" (first student, first field)
// ============================================================

// HR: 2D niz - svaki element je niz s imenom i ocjenom
//     [red][stupac]: [0][0]=ime, [0][1]=ocjena
// EN: 2D array - each element is array with name and grade
//     [row][column]: [0][0]=name, [0][1]=grade
$ucenici = [
    ["Ana",   5],   // indeks 0
    ["Marko", 4],   // indeks 1
    ["Ivan",  3]    // indeks 2
];

// HR: Dohvat pojedinog elementa - [red][stupac]
// EN: Accessing individual element - [row][column]
echo "\nElement: ".$ucenici[0][0];  // Ana
echo "\nElement: ".$ucenici[0][1];  // 5
echo "\nElement: ".$ucenici[1][0];  // Marko
echo "\nElement: ".$ucenici[1][1];  // 4

// HR: Ispis s ugniježđenom for petljom
//     Vanjska petlja ($i) = redovi (učenici)
//     Unutarnja petlja ($j) = stupci (ime, ocjena)
//     count($ucenici[$i]) = broj elemenata u svakom redu
// EN: Print with nested for loop
//     Outer loop ($i) = rows (students)
//     Inner loop ($j) = columns (name, grade)
//     count($ucenici[$i]) = number of elements in each row
echo "\nISPIS PREKO FOR PETLJE:\n";
for($i = 0; $i < count($ucenici); $i++){
    for($j = 0; $j < count($ucenici[$i]); $j++){
        echo $ucenici[$i][$j]." ";
    }
    echo PHP_EOL;
}

// HR: Ispis s ugniježđenom foreach petljom
//     $i = indeks retka, $red = cijeli red (niz)
//     $j = indeks stupca, $element = vrijednost
// EN: Print with nested foreach loop
//     $i = row index, $red = entire row (array)
//     $j = column index, $element = value
echo "\nISPIS PREKO FOREACH PETLJE:\n";
foreach($ucenici as $i => $red){
    foreach($red as $j => $element){
        echo "\nElement {$element} se nalazi na poziciji {$i},{$j}";
    }
}

?>
