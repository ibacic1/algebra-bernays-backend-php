<?php

// ============================================================
// HR: Zadatak 1 - Unos studenata i ocjena u asocijativni niz
//     Ključ = ime studenta, Vrijednost = ocjena
//     Nakon unosa: izračun prosjeka i broj studenata iznad prosjeka
// EN: Exercise 1 - Entering students and grades into associative array
//     Key = student name, Value = grade
//     After input: calculate average and number of students above average
// ============================================================

$broj_stud = (int)readline("Unesite broj studenata: ");

// HR: Prazan asocijativni niz - punimo ga u petlji
// EN: Empty associative array - we fill it in the loop
$predmeti = array();

for($i = 1; $i <= $broj_stud; $i++){
    $ime    = readline("Unesite ime {$i}. studenta: ");
    $ocjena = (int)readline("Unesite ocjenu za {$i}. studenta: ");
    // HR: Dodavanje elementa - ključ je ime, vrijednost je ocjena
    // EN: Adding element - key is name, value is grade
    $predmeti[$ime] = $ocjena;
}

// HR: array_sum() - zbraja sve vrijednosti niza
//     count() - vraća broj elemenata
//     Prosjek = zbroj / broj elemenata
// EN: array_sum() - sums all values in array
//     count() - returns number of elements
//     Average = sum / number of elements
$prosjek = array_sum($predmeti) / count($predmeti);
echo "\nProsjek: ".$prosjek;

// HR: Prebrojavanje studenata s ocjenom većom od prosjeka
// EN: Counting students with grade above average
$veciodprosjeka = 0;
foreach($predmeti as $stud => $ocj){
    if($ocj > $prosjek){
        $veciodprosjeka++;
    }
}
echo "\nBroj studenata čija je ocjena veća od prosjeka: {$veciodprosjeka}";

// ============================================================
// HR: Zadatak 2 - Gradovi i prosječne plaće
//     Unos gradova s plaćama, analiza po različitim kriterijima
//     Ovo je zadatak za samostalnu izradu (domaća zadaća)
// EN: Exercise 2 - Cities and average salaries
//     Enter cities with salaries, analyze by different criteria
//     This is a self-study exercise (homework)
// ============================================================

/*
HR: Potrebno je:
    1. Omogućiti unos broja gradova s prosječnim plaćama
    2. Izračunati ukupan iznos plaća za gradove koji počinju s "B"
    3. Gradove čija je plaća ispod prosjeka staviti u $socijalnigradovi
    4. Svim gradovima s plaćom ispod 2000 povećati plaću za 30%

EN: Need to:
    1. Enable input of number of cities with average salaries
    2. Calculate total salary for cities starting with "B"
    3. Cities with salary below average put in $socijalnigradovi
    4. All cities with salary below 2000 increase salary by 30%
*/

?>
