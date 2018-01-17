#!/usr/bin/php
<?php
  if($argc == 2)
  {
    echo $argv[1]."\n";
    if (preg_match("/([M|m]ardi) ([0-9]{1-2}) ([N|n]ovembre) ([0-9]{4}) ([0-9]{1-2}):([0-9]{1-2}):([0-9]{1-2})/" ,$argv[1]))
    {

      date_default_timezone_set('Europe/Paris');
      $day;
      $hour;
      $s;
      $min;
      $month;
      $year;


      // /([L|l]undi|[M|m]ardi|[M|m]ercredi|[J|j]eudi|[V|v]endredi|[S|s]amedi|[D|d]imanche)[ ]{1}([0-9]{1-2})[ ]{1}([J|j]anvier|[F|f]evrier|[M|m]ars|[A|a]vril|[M|m]ai|[J|j]uin|[J|j]uillet|[A|a]out|[S|s]eptembre|[O|o]ctobre|[N|n]ovembre|[D|d]ecembre)[ ]{1}([0-9]{4})[ ]{1}([0-9]{1-2})[:]{1}([0-9]{1-2})[:]{1}([0-9]{1-2})/
      $day = preg_grep("", $argv[1]);
      $ts= mktime($hour[0], $min[0], $s[0], $month[0], $day[0], $year[0]);
      echo $ts."\n";
    }
    else {
      echo "Wrong Format\n";
    }
  }
 ?>
