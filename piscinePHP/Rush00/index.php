<?php

  if($_GET == NULL)
    include ('resources/site.php');
  else if ($_GET['page'] == 'panier')
    include ('resources/panier.php');
  else if ($_GET['page'] == 'admin')
    include ('resources/admin.php');
  else
    include ('resources/site.php');
?>
