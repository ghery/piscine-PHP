<?php
  if (!file_exists("../private") || !file_exists("../private/passwd"))
    echo "ERROR\n";
  else if ($_POST['submit'] == 'OK' && $_POST['login'] != NULL && $_POST['oldpw'] != NULL && $_POST['newpw'] != NULL)
  {
    $unserTab = unserialize(file_get_contents("../private/passwd"));
    if ($unserTab[$_POST['login']] != NULL && hash('gost' ,hash('whirlpool',$_POST['oldpw'])) == $unserTab[$_POST['login']])
    {
      $unserTab[$_POST['login']] = hash('gost' ,hash('whirlpool',$_POST['newpw']));
      file_put_contents("../private/passwd", serialize($unserTab));
      echo "OK\n";
    }
    else
      echo "ERROR\n";
  }
  else
    echo "ERROR\n";
?>
