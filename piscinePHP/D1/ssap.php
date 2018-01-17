#!/usr/bin/php
<?php
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
  sort($tab);
  $tab = array_filter($tab);
    foreach ($tab as $words) {
      echo $words."\n";
    }
 ?>
