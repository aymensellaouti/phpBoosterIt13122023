<?php
// $args = [1,2,3,4,5]
// product(1,2,3,4,5)
function product(...$args) {
    // 1,2,3,4,5
    $prod = 1; 
    foreach ($args as $arg) {
        if ($arg != 0)
            $prod *= $arg;
    }
    return $prod;
}
echo product(1,2,3,4,5);