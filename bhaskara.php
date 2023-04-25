<?php

$a = 2;
$b = 5;
$c = 3;

$delta = ($b*$b) - 4*$a*$c;

echo "Delta: ".$delta."<br>";

$X1 = (($b * -1) + sqrt($delta)) / (2*$a);
$X2 = (($b * -1) - sqrt($delta)) / (2*$a);

echo "X': ".$X1."<br>";
echo "X'': ".$X2."<br>";

?>