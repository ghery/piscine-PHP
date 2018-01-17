#!/usr/bin/php
<?php

function sortcomponent($a, $b)
{
  if($a == $b)
    return(0);
  else if(is_numeric($a) && !is_numeric($b) && (($b >= 'A' && $b <= 'Z') || ($b >= 'a' && $b <= 'z')))
    return 1;
  else if(!is_numeric($a) && is_numeric($b) && (($a >= 'A' && $a <= 'Z') || ($a >= 'a' && $a <= 'z')))
    return -1;
  else if(is_numeric($a) && !is_numeric($b) && ($b < 'A' || ($b > 'Z' && $b < 'a') || $b > 'z'))
    return -1;
  else if(!is_numeric($a) && is_numeric($b) && ($a < 'A' || ($a > 'Z' && $a < 'a') || $a > 'z'))
    return 1;
  else if(!is_numeric($a) && !is_numeric($b) && (($b < 'A' || ($b > 'Z' && $b < 'a') || $b > 'z') && (($a >= 'A' && $a <= 'Z') || ($a >= 'a' && $a <= 'z'))))
    return -1;
  else if(!is_numeric($a) && !is_numeric($b) && ($a < 'A' || ($a > 'Z' && $a < 'a') || $a > 'z') && (($b >= 'A' && $b <= 'Z') || ($b >= 'a' && $b <= 'z')))
    return 1;
  else if(is_numeric($a) && is_numeric($b))
    return ($a < $b) ? -1 : 1;
  else if(!is_numeric($a) && !is_numeric($b) && ((($a >= 'A' && $a <= 'Z') || ($a >= 'a' && $a <= 'z')) && (($b >= 'A' && $b <= 'Z') || ($b >= 'a' && $b <= 'z'))))
  {
    $a = strtolower($a);
    $b = strtolower($b);
    return ($a < $b) ? -1 : 1;
  }
  else if(!is_numeric($a) && !is_numeric($b))
      return ($a < $b) ? -1 : 1;
}

$i = 0;
$sentence;

foreach ($argv as $words) {
  if ($i > 0)
  {
      $sentence .= " ".$words;
  }
  $i++;
}
$tab = explode(" ", $sentence);
usort($tab, 'sortcomponent');
$tab = array_filter($tab);
  foreach ($tab as $words) {
    echo $words."\n";
  }
?>
