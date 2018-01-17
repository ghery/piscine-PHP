#!/usr/bin/php
<?php
  if ($argc == 4)
  {
    if (substr_count($argv[2], '+') > 0)
      echo ($argv[1] + $argv[3])."\n";
    else if (substr_count($argv[2], '-') > 0)
      echo ($argv[1] - $argv[3])."\n";
    else if (substr_count($argv[2], '*') > 0)
      echo ($argv[1] * $argv[3])."\n";
    else if (substr_count($argv[2], '/') > 0)
      echo ($argv[1] / $argv[3])."\n";
    else if (substr_count($argv[2], '%') > 0)
      echo ($argv[1] % $argv[3])."\n";
  }
  else {
    echo "Incorrect Parameters\n";
  }
?>
