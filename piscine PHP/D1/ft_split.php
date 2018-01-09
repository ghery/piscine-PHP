#!/usr/bin/php
<?php
  function ft_split($entry)
  {
    $tab = explode(" ", $entry);
    sort($tab);
    $tab = array_filter($tab);
    return $tab;
  }
 ?>
