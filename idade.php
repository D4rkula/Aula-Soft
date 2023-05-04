<?php

$dias = 7300;

$ano = $dias / 365;

if ($ano >= 18) {
    echo $ano."<br>É maior de idade";
} else {
    echo $ano."<br>É menor de idade";
}

?>