<?php
function selimtask10 ($a, $b)
{
   return strlen ((string)($a + $b)) > strlen ((string)$a) ? $a : $a + $b;
}

echo (selimtask10 (2, 7))."\n";
echo (selimtask10 (11, 33))."\n";
echo (selimtask10 (98, 4))."\n";
echo (selimtask10 (90, 30))."\n";
echo (selimtask10 (119, 880))."\n";
