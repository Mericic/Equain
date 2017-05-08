<?php
/**
 * Created by PhpStorm.
 * User: Aymeric
 * Date: 01/05/2017
 * Time: 00:03
 */

$base = new Model_Album();
$baseImages = new Model_Images();

if(!isset($_GET['album']))
{
    ob_start();
    $albums = $base->getFacade();
    foreach($albums as $val)
    {
        $al = $base->getAlbum($val['IdAlbum']);
        $img = $baseImages->getImage($al[0]['IdPhoto']);
        echo '
        <a href="index.php?page=Album_Photo&album='.$val['IdAlbum'].'" class="col-md-4">
            <div  class="panel panel-primary" style="text-align: center; height: auto; width: 80%">
                <div class="panel-heading" style="height: 40px;"><p>'.$val['NomAlbum'].'</p></div>
                <div class="panel-body">
                    <img src="'.$img['lien'].'" class="img-responsive" style="width: 90%; margin: auto;">
                </div>
            </div>
        </a>';
    }

    echo '<a href="#">
        <div class="col-md-4 panel panel-primary" style="text-align: center; height: 150px;">
            <span class="glyphicon glyphicon-plus" aria-hidden="true" style="vertical-align: middle; line-height: 140px;"></span>
        </div>
    </a>';
    $album = ob_get_clean();
}else
{
    ob_start();

    $Album = $base->getAlbum($_GET['album']);
    foreach($Album as $val)
    {
        $img = $baseImages->getImage($val['IdPhoto']);
        echo '
        <img class="img-responsive" src="'.$img['lien'].'" style="width:90px">
        
        ';
    }

    $album=ob_get_clean();
}
?>