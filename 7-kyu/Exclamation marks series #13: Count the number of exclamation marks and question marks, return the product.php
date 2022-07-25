<?php

/*
 *
 * Count the number of exclamation marks and question marks, return the product.

Examples
Product("") == 0
product("!") == 0
Product("!ab? ?") == 2
Product("!!") == 0
Product("!??") == 2
Product("!???") == 3
Product("!!!??") == 6
Product("!!!???") == 9
Product("!???!!") == 9
Product("!????!!!?") == 20

 */

function product(string $s): int {
    $split = str_split($s);
    $exclam = 0;
    $quest = 0;
    foreach($split as $value) {
        if($value == '?')
            $quest++;
        if($value == '!')
            $exclam++;
    }
    return $quest * $exclam;
}