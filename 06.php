<?php
function selim ($str) 
{
   return strlen($str) > 1 ? substr($str, strlen($str) - 1).substr($str, 1, strlen($str) - 2). substr($str, 0, 1) : $str;
   
}

echo selim ("ronaldo")."\n";
echo selim ("coding")."\n";
echo selim ("abcde")."\n";