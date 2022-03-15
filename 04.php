<?php
function selim ($a)
{
  if (strlen($a) >= 2 && substr($a,0, 2) == "if")
            {
                return $a;
            }
      return "if ".$a;
}
echo selim ("if else")."\n";
echo selim ("else")."\n";
echo selim ("if")."\n";