<?php
function task7 ($s) 
{
   return $s % 3 == 0 || $s % 7 == 0;
}

var_dump(task7 (3));
var_dump(task7 (956));
var_dump(task7 (147));
var_dump(task7 (37952));