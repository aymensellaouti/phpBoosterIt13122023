<?php
function test() {
    echo "Nous avons ".func_num_args()." arguments".PHP_EOL;
    for($i=0;$i<func_num_args();$i++) {
        $nb = $i+1;
        echo "Le $nb éme argument est  ".func_get_arg($i)." ".PHP_EOL;
    }
}
test(1,2,3);
test(10,20,30,40,50,60);