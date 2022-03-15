<?php
function exercise2 ($s, $y) 
{
    return ($s == 30) || ($y == 30) || ($s + $y == 30);
}

var_dump( exercise2 (30, 16));
var_dump( exercise2 (27, 3));
var_dump( exercise2 (14, 50));
var_dump( exercise2 (13, 17));  
var_dump( exercise2 (70, 100));  

