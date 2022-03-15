<?php
function exercise5 ($x, $y) 
{
   return substr($x,0,$y).substr($x,$y+1,strlen($x)-$y);
}

echo exercise5 ("Python", 3)."\n";
echo exercise5 ("Python", 1)."\n";
echo exercise5 ("Python", 5)."\n";