<?php
#Suma de dos enteros

if (!empty($_POST["num1"]) & !empty($_POST["num2"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    sumar($num1, $num2);
}

function sumar($num1, $num2)
{
    echo "<h2>Suma de dos enteros</h2>";
    echo $num1 + $num2;
}

#Mínimo de tres números


if (!empty($_POST["minNum1"]) & !empty($_POST["minNum2"]) & !empty($_POST["minNum3"])) {
    $a = $_POST["minNum1"];
    $b = $_POST["minNum2"];
    $c = $_POST["minNum3"];
    minNum($a, $b, $c);
}
function minNum($a, $b, $c)
{
    echo "<h2>Mínimo de tres números</h2>";
    if ($a < $b & $a < $c) {
        echo "{$a} es el menor de los tres</br>";
    } else if ($b < $a & $b < $c) {
        echo "{$b} es el menor de los tres</br>";
    } else if ($c < $a & $c < $b) {
        echo "{$c} es el menor de los tres</br></br></br>";
    } else {
        echo "Los tres son iguales</br>";
    }
}
#Máximo de cuatro números


if (!empty($_POST["maxNum1"]) & !empty($_POST["maxNum2"]) & !empty($_POST["maxNum3"]) & !empty($_POST["maxNum4"])) {
    $a = $_POST["maxNum1"];
    $b = $_POST["maxNum2"];
    $c = $_POST["maxNum3"];
    $d = $_POST["maxNum4"];
    maxNum($a, $b, $c, $d);
}
function maxNum($a, $b, $c, $d)
{
    echo "<h2>Máximo de cuatro números comprueba si el máximo está en la posicion 1</h2>";
    if ($a > $b & $a > $c & $a > $d) {
        echo "{$a} Este es el máximo es correcto";
    } else if ($b > $a & $b > $c & $b > $d) {
        echo "{$b} es el máximo pero debería estar en la posición 1 🙄</br>";
    } else if ($c > $a & $c > $b & $c > $d) {
        echo "{$c} es el máximo pero debería estar en la posición 1 🙄</br>";
    } else if ($d > $a & $d > $b & $d > $c) {
        echo "{$c} es el máximo pero debería estar en la posición 1 🙄</br>";
    } else {
        echo "Los cuatro son iguales</br>";
    }
}

#Comprobar un caracter del 0 al 9

if (!empty($_POST["charAnalicer"])) {
    $char0a9 = $_POST["charAnalicer"];
    charAnalicer($char0a9);
}

function charAnalicer($char0a9)
{

    switch ($char0a9) {
        case "0":
            echo "el valor es 0";
            break;
        case "1":
            echo "el valor es 1";
            break;
        case "2":
            echo "el valor es 2";
            break;
        case "3":
            echo "el valor es 3";
            break;
        case "4":
            echo "el valor es 4";
            break;
        case "5":
            echo "el valor es 5";
            break;
        case "6":
            echo "el valor es 6";
            break;
        case "7":
            echo "el valor es 7";
            break;
        case "8":
            echo "el valor es 8";
            break;
        case "9":
            echo "el valor es 9";
            break;
        default:
            echo "No es un número es una letra";
            break;
    }

}

#Comprobar un caracter si es una vocal distinta de i

if (!empty($_POST["vocal"])) {
    $charVocal = $_POST["vocal"];
    vocalAnalicer($charVocal);
}

function vocalAnalicer($charVocal)
{
    switch ($charVocal) {
        case "a":
            echo "es la vocal a";
            break;
        case "e":
            echo "es la vocal e";
            break;
        case "i":
            echo "es la vocal i";
            break;
        case "o":
            echo "es la vocal 0";
            break;
        case "u":
            echo "es la vocal u";
            break;
        default:
            echo "No es una vocal";
    }
}

#suma array de números 
$conditionValidation = !empty($_POST["arrNum1"]) && !empty($_POST["arrNum2"]) &&
    !empty($_POST["arrNum3"]) && !empty($_POST["arrNum4"]) && !empty($_POST["arrNum5"]) && !empty($_POST["arrNum6"]);
if ($conditionValidation) {
    $array1 = array($_POST["arrNum1"], $_POST["arrNum2"], $_POST["arrNum3"]);
    $array2 = array($_POST["arrNum4"], $_POST["arrNum5"], $_POST["arrNum6"]);
    sumArr($array1, $array2);
}

function sumArr($a, $b)
{
    $sumArray = $a[0] + $a[1] + $a[2] + $b[0] + $b[1] + $b[2];
    echo "el resultado es $sumArray";
}
?>