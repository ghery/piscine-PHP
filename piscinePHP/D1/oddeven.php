#!/usr/bin/php
<?php
  $nb = 0;
  $i = 0;

  while ($i < 10) {
    echo "Entrez un nombre: ";
    $nb = trim(fgets(STDIN));;
    if (feof(STDIN) == TRUE)
    {
      echo "^D\n";
      exit(0);
    }
    else if (is_numeric($nb) == false)
      echo "'".$nb."' n'est pas un chiffre\n";
    else if ($nb%2 == 1)
      echo "Le chiffre ".$nb." est Impair\n";
    else if ($nb%2 == 0)
      echo "Le chiffre ".$nb." est Pair\n";
  }
 ?>
