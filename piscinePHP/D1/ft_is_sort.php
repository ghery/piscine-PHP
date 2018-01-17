<?php
  function ft_is_sort($tab)
  {

    $Ntab = $tab;

    sort($Ntab);
    if (strcmp($tab, $Ntab) == 0)
      return TRUE;
    rsort($Ntab);
    if (strcmp($tab, $Ntab) == 0)
      return TRUE;
    else
      return FLASE;
  }
 ?>
