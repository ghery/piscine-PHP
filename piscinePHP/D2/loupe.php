#!/usr/bin/php
<?php
  function upper($matches) {
    return strtoupper($matches[0]);
  }

  if ($argc == 2)
  {
    $file = file_get_contents($argv[1]);
    $sentence = preg_replace_callback("/<a.*>(.*)</", function ($m) {return strtoupper($m[0]);}, $file);

    echo $sentence;
  }
 ?>
