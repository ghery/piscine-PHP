#!/usr/bin/php
<?php
  if ($argc == 2)
  {
    $i = 0;
    $tab = explode(" ", $argv[1]);
    $tab = array_filter($tab);
    foreach ($tab as $word) {
      if ($i == 0)
        echo $word;
      else
      echo " ".$word;
      $i++;
    }
    echo "\n";
  }
 ?>
