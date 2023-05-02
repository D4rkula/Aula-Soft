<?php

$v1 = 10;
$v2 = 3;
$v3 = 14;

if ($v1 < $v2 && $v1 < $v3 && $v2 < $v3) {
    echo $v1."<br>".$v2."<br>".$v3;
} elseif ($v1 < $v2 && $v1 < $v3 && $v3 < $v2) {
    echo $v1."<br>".$v3."<br>".$v2;
} elseif ($v2 < $v1 && $v2 < $v3 && $v1 < $v3) {
    echo $v2."<br>".$v1."<br>".$v3;
} elseif ($v2 < $v1 && $v2 < $v3 && $v3 < $v1) {
    echo $v2."<br>".$v3."<br>".$v1;
} elseif ($v3 < $v1 && $v3 < $v2 && $v1 < $v2) {
    echo $v3."<br>".$v1."<br>".$v2;
} else {
    echo $v3."<br>".$v2."<br>".$v1;
}

?>