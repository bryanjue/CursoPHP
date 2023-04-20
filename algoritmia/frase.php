<?php
$frase = $_POST['frase'];
$numberofletters = 0;
for ($i = 0; $i < (strlen($frase) - 1); $i++) {
    if (strtolower($frase[$i]) == "l") {
        $numberofletters++;
    }
}

echo "hay tantas letras $numberofletters";