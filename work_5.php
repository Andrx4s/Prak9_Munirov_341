<?php
function reverse($str) {
    $n = strlen($str);
    if($n == 1)  {
        return $str;
    }
    else {
        $n--;
        return reverse(substr($str,1, $n)) . substr($str, 0, 1);
    }
}
echo reverse('1234567890');