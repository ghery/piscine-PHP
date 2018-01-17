<?php
  if (!file_exists("../private"))
    mkdir("../private");
  if ($_POST['submit'] == 'OK' && $_POST['login'] != NULL && $_POST['passwd'] != NULL)
  {
    $unserTab = unserialize(file_get_contents("../private/passwd"));
    if ($unserTab[$_POST['login']] != NULL)
      echo "ERROR\n";
    else
    {
      $unserTab[$_POST['login']] = hash('gost' ,hash('whirlpool',$_POST['passwd']));
      file_put_contents("../private/passwd", serialize($unserTab));
      echo "OK\n";
    }
  }
  else {
    echo "ERROR\n";
  }
?>
