<?php 
$x = 1;
$y = 5;
function test(&$a, &$b) {
    $a = $a + $b;
    $b = 7;
}
test($x, $y);
echo "x: " . $x . " y: " . $y;