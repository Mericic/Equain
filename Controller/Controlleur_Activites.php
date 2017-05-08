<?php


$base = new Model_Activites();
$imagesBase = new Model_Images();

if($_GET['page']=='activites' && !isset($_GET['type']))
{
    $ToutesActis= array_reverse($base->getActivites());
    $ticket = "";


    foreach($ToutesActis as $Acti)
    {
        $Resume= str_split($Acti['Contenu'], 200);
        if($Acti['Image']!='')
        {
            $lienImage = $imagesBase->getImage($Acti['Image']);
            $image='<a href="index.php?page=activites&type='.$Acti['Id_Ticket'].'"><img class="img-responsive" src="'.$lienImage['lien'].'"></a>';
        }
        else
        {
            $image='<p>pas d\'image</p>';
        }
        $ticket .= '
<div class=" col-md-offset-2 col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">
           <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
            <h3 class="panel-title">'.$Acti['Titre'].'</h3>
          </div>
          <div class="panel-body">
            <div class="col-xs-2">
               '.$image.'
            </div>
            <div class="col-xs-10">
                '.$Resume[0].'<br>
                <a href="index.php?page=activites&type='.$Acti['Id_Ticket'].'">Lire plus</a>
            </div>
            
          </div>
        </div>
</div>';
    }
}
else if($_GET['page']=='activites' && isset($_GET['type']))
{
    $Activite = $base->getParticuliere($_GET['type']);


    if($Activite['Image']!='')
    {
        $lienImage = $imagesBase->getImage($Activite['Image']);
        $image='<a href="'.$Activite['Image'].'"><img class="img-responsive" src="'.$lienImage['lien'].'"></a>';
    }

    else
    {
        $image='<p>pas d\'image</p>';
    }
    $Activite = '
<div class=" col-md-offset-2 col-md-8">
        <div class="panel panel-default">
      <div class="panel-heading">
       <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
        <h3 class="panel-title">'.$Activite['Titre'].'</h3>
      </div>
      <div class="panel-body">
        <div class="col-xs-4">
           '.$image.'
        </div>
        <div class="col-xs-8">
            '.$Activite['Contenu'].'<br>
        </div>
        
      </div>
    </div>
</div>
    ';

}


if(isset($_POST['Titre_Activite']) && isset($_POST['Contenu_Activite']))
{
    $base->addActivite($_POST['Titre_Activite'], $_POST['Contenu_Activite']);
    header('index.php?page=activite');
}