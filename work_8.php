<?php
function palindrome($string) {
    if ($string == strrev($string))
        return "Да";
    else
        return "Нет";
}
echo palindrome('kak')."<br>";
echo palindrome('topot');