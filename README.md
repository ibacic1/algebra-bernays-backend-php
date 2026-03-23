# PHP Backend Tečaj – Algebra Bernays

Portfolio repozitorij s primjerima koda i vježbama s tečaja PHP backend razvoja.  
Portfolio repository with code examples and exercises from the PHP backend development course.

**Tečaj / Course:** Back-End Developer na PHP-u  
**Škola / School:** Algebra Bernays Sveučilište  
**Trajanje / Duration:** 3–6 mjeseci / 3–6 months  
**Seminari / Seminars:** Linux → HTML → PHP → MySQL → Laravel

---

# 01 – Radno okruženje / Development Environment

## Što smo naučili / What We Learned

| Tema (HR) | Topic (EN) |
|---|---|
| Operacijski sustavi (Linux, Windows, macOS) | Operating systems |
| Virtualni strojevi – VirtualBox | Virtual machines – VirtualBox |
| Linux datotečni sustav i naredbe | Linux filesystem and commands |
| Prava pristupa – `chmod` | File permissions – `chmod` |
| Uređivači teksta – VI, NANO | Text editors – VI, NANO |
| Git i GitHub | Git and GitHub |
| Apache web server | Apache web server |
| MySQL server | MySQL server |
| PHP instalacija i `php.ini` | PHP installation and `php.ini` |
| Composer | Composer package manager |

## Ključne Linux naredbe / Key Linux Commands

```bash
cd <mapa>         # ulaz u direktorij / enter directory
mkdir <naziv>     # kreiranje direktorija / create directory
touch <datoteka>  # kreiranje datoteke / create file
mv <staro> <novo> # premještanje/preimenovanje / move or rename
rm <datoteka>     # brisanje datoteke / delete file
rm -r <mapa>      # brisanje mape i sadržaja / delete folder and contents
chmod u+x <file>  # dodavanje execute prava vlasniku / add execute for owner
```

## Ključne Git naredbe / Key Git Commands

```bash
git init                        # inicijalizacija lokalnog repozitorija
git status                      # provjera stanja
git add <datoteka>              # dodavanje u indeks
git commit -m "poruka"          # commit s porukom
git remote add origin <url>     # povezivanje s udaljenim repozitorijem
git push                        # slanje na udaljeni repozitorij
git pull                        # dohvat i sjedinjavanje s udaljenog repozitorija
git clone <url>                 # kloniranje repozitorija
git branch <naziv>              # kreiranje nove grane
git checkout <grana>            # prebacivanje na granu
git merge <grana>               # spajanje grana
```

---

# 02 – Osnove HTML-a / HTML Basics

## Što smo naučili / What We Learned

| Tema (HR) | Topic (EN) |
|---|---|
| Što je HTML | What is HTML |
| HTML oznake (tagovi) | HTML tags |
| Struktura HTML dokumenta | HTML document structure |
| Tablice (`<table>`, `<tr>`, `<th>`, `<td>`) | Tables |
| Liste (`<ul>`, `<ol>`, `<dl>`) | Lists |
| poveznice (`<a href="">`) | Links / Anchors |
| Obrasci (`<form>`, `<input>`, `<select>`) | Forms |

## Struktura HTML dokumenta / HTML Document Structure

```html
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naslov / Title</title>
</head>
<body>
    <!-- Sadržaj koji se prikazuje / Content that is displayed -->
</body>
</html>
```

## Važne HTML oznake / Important HTML Tags

| Oznaka / Tag | Opis (HR) | Description (EN) |
|---|---|---|
| `<h1>`–`<h6>` | Naslovi | Headings |
| `<p>` | Paragraf | Paragraph |
| `<a href="">` | Poveznica | Link |
| `<img src="">` | Slika | Image |
| `<table>`, `<tr>`, `<th>`, `<td>` | Tablica | Table |
| `<ul>`, `<ol>`, `<li>` | Liste | Lists |
| `<form>`, `<input>`, `<button>` | Obrazac | Form |

---

# 03 – PHP Osnove / PHP Basics

## Što smo naučili / What We Learned

| Tema (HR) | Topic (EN) |
|---|---|
| Što je PHP i kako radi | What PHP is and how it works |
| PHP sintaksa i markeri | PHP syntax and markers |
| Varijable i konstante | Variables and constants |
| Reference | References |
| Tipovi podataka | Data types |
| Operatori | Operators |
| Uvjetne kontrolne strukture – `if`, `switch` | Conditional structures – `if`, `switch` |
| Petlje – `while`, `do-while`, `for`, `foreach` | Loops – `while`, `do-while`, `for`, `foreach` |
| Nizovi (liste i mape) | Arrays (lists and maps) |
| Funkcije | Functions |
| Rad s datotekama i JSON | File handling and JSON |
| Sesije i kolačići | Sessions and cookies |
| Web obrasci – `$_POST`, `$_GET`, `$_FILES` | Web forms – `$_POST`, `$_GET`, `$_FILES` |

## PHP sintaksa / PHP Syntax

```php
<?php
// HR: Kod se izvršava samo unutar markera
// EN: Code only runs inside the markers

$varijabla = "vrijednost";  // varijable počinju s $ / variables start with $
$Varijabla = "druga";       // osjetljivo na velika slova / case-sensitive

echo $varijabla;            // ispisivanje / printing
?>
```

## Tipovi podataka / Data Types

```php
$cijeli    = 42;            // integer
$realni    = 3.14;          // float
$tekst     = "Hello";       // string
$logicki   = true;          // boolean
$niz       = [1, 2, 3];     // array
$nista     = null;          // NULL

define('PI', 3.14159);      // HR: konstanta – bez $ / EN: constant – no $
```

## Operatori / Operators

```php
// Aritmetički / Arithmetic
$a + $b    $a - $b    $a * $b    $a / $b    $a % $b    $a ** $b

// Usporedba / Comparison
==   ===   !=   !==   <   >   <=   >=

// Logički / Logical
&&   ||   !   and   or

// String
$a . $b         // konkatenacija / concatenation

// Kombinirani dodjele / Combined assignment
+=   -=   *=   /=   %=   .=

// Inkrement / Decrement
$a++   ++$a   $a--   --$a
```

## Kontrolne strukture / Control Structures

```php
// if / elseif / else
if ($uvjet) {
    // ...
} elseif ($drugi) {
    // ...
} else {
    // ...
}

// switch
switch ($varijabla) {
    case 'vrijednost':
        // ...
        break;
    default:
        // ...
}
```

## Petlje / Loops

```php
// while – izvršava dok je uvjet true / runs while condition is true
while ($i < 10) { $i++; }

// do-while – barem jednom / at least once
do { $i++; } while ($i < 10);

// for
for ($i = 0; $i < 10; $i++) { }

// foreach – za nizove / for arrays
foreach ($niz as $vrijednost) { }
foreach ($niz as $kljuc => $vrijednost) { }
```

## Nizovi / Arrays

```php
$lista  = ['Ana', 'Marko', 'Iva'];          // lista (numerički ključevi)
$mapa   = ['ime' => 'Ana', 'god' => 25];    // mapa (string ključevi)

$lista[]         = 'novi';                  // dodaj na kraj / add to end
$mapa['email']   = 'ana@mail.com';          // dodaj/ažuriraj ključ / add/update key
unset($mapa['god']);                         // ukloni element / remove element

count($niz);                    // broj elemenata / element count
in_array('Ana', $lista);        // postoji li vrijednost / value exists?
array_search('Ana', $lista);    // vrati ključ / return key
sort($lista);                   // sortiranje / sorting
array_merge($a, $b);            // spajanje / merging
```

## Funkcije / Functions

```php
function zbroj($a, $b, $ispisi = false) {
    $suma = $a + $b;
    if ($ispisi) echo $suma;
    return $suma;
}

$rezultat = zbroj(3, 4);
$rezultat = zbroj(3, 4, true);

$globalna = 'van';

function test() {
    $lokalna = 'unutra';    // lokalna – nije vidljiva van / local – not visible outside
    static $broj = 0;       // zadržava vrijednost između poziva / persists between calls
    $broj++;
}
```

## Datoteke i JSON / Files and JSON

```php
$json   = file_get_contents('podaci.json');
$podaci = json_decode($json, true);

$json = json_encode($podaci);
file_put_contents('podaci.json', $json);
```

## Sesije i kolačići / Sessions and Cookies

```php
session_start();
$_SESSION['korisnik'] = 'Ana';
session_destroy();

setcookie('ime', 'Ana', time() + 86400, '/');   // 86400 = 1 dan / 1 day
echo $_COOKIE['ime'];
setcookie('ime', '', time() - 3600);             // brisanje / delete
```

## Web obrasci / Web Forms

```php
$_POST['korisnik']          // POST – podaci nisu vidljivi u URL-u / not visible in URL
$_GET['pojam']              // GET – podaci su u URL-u / data is in URL

$_FILES['slika']['name']
$_FILES['slika']['tmp_name']
move_uploaded_file($_FILES['slika']['tmp_name'], 'uploads/' . $naziv);
```
