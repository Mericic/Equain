<?php
$base = new Model_Ticket();
$imagesBase = new Model_Images();

if(isset($_GET['suppr']))
{
    $ticket = $base->getticket($_GET['suppr']);
    $base->delticket($_GET['suppr']);
}

?>