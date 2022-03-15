<?php
function task09 ($v, $m) 
{
   $a = 100;
   $val = abs($v - $a);
   $val2 = abs($m - $a);
   return $val == $val2 ? 0 : ($val < $val2 ? $v : $m);
}

echo task09 (12, 13)."\n";
echo task09 (34, 34)."\n";
echo task09 (91, 99)."\n";
