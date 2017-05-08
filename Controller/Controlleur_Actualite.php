<?php

$base = new Model_Actualite();
$imagesBase = new Model_Images();

$ToutesActus= array_reverse($base->getActualites());
$ticket = "";

foreach($ToutesActus as $Actu)
{

    if($Actu['Image']!='')
    {
        $val = $imagesBase->getImage($Actu['Image']);
        $image='<a href="'.$val['lien'].'"><img class="img-responsive" src="'.$val['lien'].'"></a>';
    }
    else
    {
        $image='<p>pas d\'image</p>';
    }
    $ticket .= '
<div class="col-md-offset-2 col-md-8">
    <div class="panel panel-default">
      <div class="panel-heading">
       <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
        <button type="button" class="close" aria-label="Close" onclick="supprTicket(\'Actualite\', '.$Actu['Id_Ticket'].')"><span class="glyphicon glyphicon-remove" style="color:red" aria-hidden="true"></span></button>    
        <h3 class="panel-title">'.$Actu['Titre'].'</h3>
      </div>
      <div class="panel-body">
        <div class="row">
           <div class="col-xs-offset-2 col-xs-8">
                '.$image.'
           </div>
        </div>
        <div class="row">
            '.$Actu['Contenu'].'
        </div>
        
      </div>
      <div class="panel-footer">
        <p>parution : '.$Actu['Date_Parution'].'</p>
      </div>
    </div>
</div>';
}


if(isset($_POST['Contenu_NewActu'])&& isset($_POST['Titre_Actu']) && isset($_FILES['Image_Actu'])&& isset($_POST['Imagechecked']))
{

    if($_POST['Imagechecked'] == 'img'){
        //IMAGES ----------------------------------------------------------------------------------------
        if ($_FILES['Image_Actu']['error'] > 0) echo "<script>console.log('Erreur lors du transfert');</script>";

        $extensions_valides = array('jpg', 'jpeg', 'gif', 'png', 'JPG', 'JPEG', 'PNG');
        //1. strrchr renvoie l'extension avec le point (« . »).
        //2. substr(chaine,1) ignore le premier caractère de chaine.
        //3. strtolower met l'extension en minuscules.
        $extension_upload = strtolower(substr(strrchr($_FILES['Image_Actu']['name'], '.'), 1));
        if (in_array($extension_upload, $extensions_valides)) echo "<script>console.log('Extension incorrecte');</script>";

        $nom = '/Equain/Vue/images/Actualites/' . $_FILES['Image_Actu']['name'];
        $resultat = move_uploaded_file($_FILES['Image_Actu']['tmp_name'], $GLOBALS['path'] . $nom);
        if ($resultat) echo "<script>console.log('Transfert réussi');</script>";
        else {
            echo "FAIL " . $resultat . " " . $nom . ' ' . $_FILES['Image_Carousel']['error'];
            print_r($_FILES);
        }
        //FIN IMAGES ------------------------------------------------------------------------------------
        $idImage=$imagesBase->addImage($nom);
        $id=$idImage[0];

    }
    if($_POST['Imagechecked'] != 'img')
    $id = $_POST['Imagechecked'];

    $base->addActualites($_POST['Titre_Actu'], $_POST['Contenu_NewActu'], $id);

   header('Location: index.php?page=Actualite');
}

