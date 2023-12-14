<?php 
// declare(strict_types= 1);
function somme(int | float $x = 9 , int | float $y = 5): int { return $x + $y; }

echo somme();