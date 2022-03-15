<?php
function sumofdigitsselim ($numbers) {
    $value = 0;
      for ($k = 0; $k < strlen($numbers); $k++) {
             $value += $numbers[$k];
               }
      return $value;
}
echo sumofdigitsselim ("98712")."\n";
echo sumofdigitsselim ("09823758472")."\n";
echo sumofdigitsselim ("8292474174")."\n";
echo sumofdigitsselim ("1239214012402")."\n";

