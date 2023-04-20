<?php
echo "¿Cual es menor de los 3 numeros 5, 7 ,9? </br>";

$a = 7;
$b = 5;
$c = 9;

if ($a < $b & $a < $c) {
    echo "{$a} es el menor de los tres</br>";
} else if ($b < $a & $b < $c) {
    echo "{$b} es el menor de los tres</br>";
} else if ($c < $a & $c < $b) {
    echo "{$c} es el menor de los tres</br></br></br>";
} else {
    echo "Los tres son iguales</br>";
}

echo "</br>";
echo "¿Cuantas veces se repite la L en este texto </br>
(La vida es una obra teatral que no importa cuánto haya durado, sino lo bien que haya sido representada.)? </br>";


echo "Sumar o restar dos números </br>";

$operacion = $_POST['operacion'];
$a = $_POST['a'];
$b = $_POST['b'];

if ($operacion == "-") {
    $resultado = $a - $b;
    echo "$resultado en caso de haber elgido - </br>";
} else if ($operacion == "+") {
    $resultado = $a + $b;
    echo "$resultado en caso de haber elgido + </br>";
}

echo "</br>";
echo "Validación de usuario y contraseña </br>";

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

if ($usuario == "Bryan" & $contraseña == "1234") {
    echo "Login correcto </br>";
} else {
    echo "Login incorrecto </br>";
}

echo "</br>";
echo "Elegir una letra entre \"a\", \"b\" o \"c\" </br>";


$entrada = $_POST['entrada'];
switch ($entrada) {
    case "a":
        echo "7</br>";
        break;
    case "b":
        echo "9</br>";
        break;
    case "c":
        echo "101</br>";
        break;
    default:
        echo "Se ha equivocado de letra</br>";
}

echo "</br>";
echo "Comprobar si una hora es correcta </br>";


$h = $_POST['hora'];
$m = $_POST['minutos'];
$s = $_POST['entrada'];

if ($h < 24 & $m < 60 & $s < 60 & $h >= 0 & $m >= 0 & $s >= 0) {
    echo "la hora es correcta </br>";
} else {
    echo "la hora es incorrecta";
}

?>