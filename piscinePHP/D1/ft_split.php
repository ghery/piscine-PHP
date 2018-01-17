#!/usr/bin/php
<?php
  function ft_split($entry)
  {
    $tab = explode(" ", $entry);
    sort($tab);
    $tab = array_filter($tab);
    $i = 0;
    $tabR;
    foreach ($tab as $word) {
      $tabR[$i] = $word;
      $i++;
    }
    return $tabR;
  }
 ?>
