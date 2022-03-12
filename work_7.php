<?php
function str_lowercase($str1) {
    for ($sc = 0; $sc < strlen($str1); $sc++) {
        if (ord($str1[$sc]) >= ord('A') &&
            ord($str1[$sc]) <= ord('Z')) {
            return false;
        }
    }
    return true;
}
var_dump(str_lowercase('Munirov'));
var_dump(str_lowercase('munirov'));