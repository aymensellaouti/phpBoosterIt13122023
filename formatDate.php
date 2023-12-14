<?php
// jj/mm/aaaa => jj-mm-aaaa
$date = "jj/mm/aaaa";
var_dump(implode('-', explode('/', $date )));