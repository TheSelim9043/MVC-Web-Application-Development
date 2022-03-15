<?php
function selim ($s, $c, $y) 
{
  $max = max($s, max($c, $y));
  return $max;
}

echo selim (13, 29, 36)."\n";
echo selim (120, 39, 27)."\n";
echo selim (145, 19, 98)."\n";
echo selim (57, 56, 56)."\n";