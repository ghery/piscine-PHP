#!/usr/bin/php
<?php
  if ($argc > 1)
  {
    $sentence = preg_replace("/[ \t]+/", " ", $argv[1]);
    $sentence = preg_replace("/^[ ]/", "", $sentence);
    $sentence = preg_replace("/[ ]$/", "", $sentence);
    echo $sentence."\n";
  }
 ?>
