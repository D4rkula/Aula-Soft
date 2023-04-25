<?php

$peso = 48;
$altura = 1.65;

$IMC = $peso / ($altura * $altura);

if ($IMC < 18.5) {
    echo "Abaixo do peso";
} elseif ($IMC >= 18.5 && $IMC < 25) {
    echo "Peso ideal";
} elseif ($IMC >= 25 && $IMC <= 30) {
    echo "Sobrepeso";
} else {
    echo "Obesidade";
}

?>