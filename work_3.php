<?php
function factorialNumber($n) {
    if($n ==0) {
        return 1;
    }
    else {
        return $n * factorialNumber($n-1);
    }
}
echo factorialNumber(5);