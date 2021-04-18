<?php

function sys_function($arg1,$arg2){
    $arg2 += $arg2;
    return $arg1($arg2);
}
function usre_function($num){
    $a =  $num * $num * $num * $num;
    echo $a;
}
sys_function('usre_function',10);
?>