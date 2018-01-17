#!/usr/bin/php
<?php
  if ($argc > 1)
  {
    $i = 0;
    $tab = explode(" ", $argv[1]);
    $tab = array_filter($tab);

    foreach ($tab as $word) {
      if ($i > 0)
        echo $word." ";
      $i++;
    }
    $i = 0;
    $tabR;
    foreach ($tab as $word) {
      $tabR[$i] = $word;
      $i++;
    }
    if ($tabR != NULL)
      echo $tabR[0]."\n";
  }
?>
