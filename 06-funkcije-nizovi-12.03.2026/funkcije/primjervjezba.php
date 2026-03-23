<?php

/*
HR: Zadatak - kalkulator funkcija:
    Napraviti funkciju koja prima 3 parametra: 2 broja i operaciju (z,o,m,d,mod)
    Ovisno o operaciji izračunava rezultat pomoću switch
    Zaštita od dijeljenja s nulom za operacije d i mod
    U slučaju pogrešne operacije → "Pogrešna operacija!"

EN: Exercise - function calculator:
    Create function that takes 3 parameters: 2 numbers and operation (z,o,m,d,mod)
    Depending on operation calculates result using switch
    Protection from division by zero for d and mod operations
    In case of wrong operation → "Pogrešna operacija!"
*/

// HR: Funkcija kalkulator - prima 2 broja i znak operacije
//     z=zbrajanje, o=oduzimanje, m=množenje, d=dijeljenje, mod=modulo
// EN: Calculator function - takes 2 numbers and operation sign
//     z=addition, o=subtraction, m=multiplication, d=division, mod=modulo
function Kalkulator($broj1, $broj2, $operacija){

    switch($operacija){

        case "z":
            // HR: Zbrajanje / EN: Addition
            return $broj1 + $broj2;

        case "o":
            // HR: Oduzimanje / EN: Subtraction
            return $broj1 - $broj2;

        case "m":
            // HR: Množenje / EN: Multiplication
            return $broj1 * $broj2;

        case "d":
            // HR: Zaštita od dijeljenja s nulom
            //     Ako je $broj2 == 0, ne možemo dijeliti → vraćamo poruku greške
            // EN: Protection from division by zero
            //     If $broj2 == 0, we cannot divide → return error message
            if($broj2 == 0){
                return "Nije dozvoljeno dijeljenje s nulom.";
            }
            return $broj1 / $broj2;

        case "mod":
            // HR: Modulo - ostatak dijeljenja
            //     Isto kao dijeljenje - ne smijemo dijeliti s nulom
            // EN: Modulo - remainder of division
            //     Same as division - cannot divide by zero
            if($broj2 == 0){
                return "Nije dozvoljeno dijeljenje s nulom.";
            }
            return $broj1 % $broj2;

        // HR: default - izvršava se ako operacija nije z,o,m,d ili mod
        // EN: default - executes if operation is not z,o,m,d or mod
        default:
            return "Pogrešna operacija!";
    }
}

// HR: Testiranje funkcije s različitim operacijama
// EN: Testing function with different operations
echo "\nZbrajanje 10 + 5 = ".Kalkulator(10, 5, "z");
echo "\nOduzimanje 10 - 5 = ".Kalkulator(10, 5, "o");
echo "\nMnoženje 10 * 5 = ".Kalkulator(10, 5, "m");
echo "\nDijeljenje 10 / 5 = ".Kalkulator(10, 5, "d");
echo "\nDijeljenje 10 / 0 = ".Kalkulator(10, 0, "d");
echo "\nModulo 10 % 3 = ".Kalkulator(10, 3, "mod");
echo "\nModulo 10 % 0 = ".Kalkulator(10, 0, "mod");
echo "\nPogrešna operacija: ".Kalkulator(10, 5, "x");

?>
