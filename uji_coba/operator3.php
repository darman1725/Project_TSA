<?php

$a = true;
$b = false;

// Variabel $c akan bernilai false
$c = $a && $b;
printf("%b && %b = %b", $a,$b,$c);
echo "<hr>";

// Variabel $c akan bernilai true
$c = $a || $b;
printf("%b || %b = %b", $a,$b,$c);
echo "<hr>";

// Variabel $c akan bernilai true
$c = !$a;
printf("!%b = %b", $a,$c);
echo "<hr>";

?>