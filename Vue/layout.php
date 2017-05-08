<?php

if($page=="accueil.php")
    include_once('headerAcc.php');
else
    include_once('header.php');


include_once ($page);


include_once ('footer.php');

include_once('modalFades.php');

?>