<?php

$base= new Model_Accueil();
$donnesCarousel = $base->getCarousel();
$donnes_L = $base->getLarge();
$donnes_P = $base->getPetit();
$imagesBase = new Model_Images();



        $i=1;
        ob_start();

        foreach($donnesCarousel as $val)
        {
            if($i==1)
                $item= 'item active';
            else
                $item ='item';

            $image = $imagesBase->getImage($val['Image']);
            echo '  
            <div class="'.$item.'" id="item'.$i.'">
                <img  src="'.$image['lien'].'" alt="">
                <div class="container">
                    <div class="carousel-caption" style="background-color: rgba(0, 0, 0, 0.2); border-radius: 5px;">
                        <div class="row">';
                        if(isset($Boutons_item))
                            echo '<button class="btn btn-default" onclick="ModalCarousel('.$i.')"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                                  <a href="#ModImage_'.$i.'" data-toggle="modal"><button class="btn btn-default"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></button></a>';
                         echo '           </div>
                        <div class="row">
                            <h1 id="Titre_'.$i.'">'.$val['Titre'].'</h1>
                            <p id="Contenu_'.$i.'" class="lead">'.$val['Contenu'].'</p>
                        </div>
                    </div>
                </div>
            </div>';
            $i++;
        }

        $Carousel = ob_get_clean();

        $j=1;
        ob_start();
if(!isset($Affichage_Images))$Affichage_Images='';
        foreach($donnesCarousel as $val) {

            echo '
                <div class="modal fade" id="Mod_Carousel_'.$j.'" role="dialog">
                    <div class="modal-dialog modal-lg">
                
                        <!-- Modal content-->
                        <div class="modal-content">
                            <form method="post" role="form" action="index.php">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <label>Titre</label>
                                    <h4 class="modal-title"><input class="form-control" type="text" name="Titre_Carousel" id="Titre_Carouse" placeholder="Titre" value="'.$val['Titre'].'"></h4>
                                </div>
                                <div class="modal-body" id="contenu">
                                    <div class="form-group">
                                        <label> Rentrer message</label>
                                        <textarea class="form-control" name="Contenu_Carousel" id="Contenu_Carousel_'.$j.'" rows="15" type="text" placeholder="Contenu">'.$val['Contenu'].'</textarea>
                                        <script>CKEDITOR.replace("Contenu_Carousel_'.$j.'"); // Pour utiliser l\'éditeur de texte doc ici: http://docs.cksource.com/Main_Page </script>

                                    </div>
                                    <input type="hidden" value="'.$val['Id_Ticket'].'" id="Id" name="Id" >
                                </div>
                                <input type="submit" class="btn btn-success btn-block" name="submit">
                            </form>
                
                        </div>
                
                    </div>
                </div>
                <div class="modal fade" id="ModImage_'.$j.'" role="dialog">
                    <div class="modal-dialog modal-lg">
                
                        <!-- Modal content-->
                        <div class="modal-content">
                            <form method="post" role="form" action="index.php" enctype="multipart/form-data">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h1>Image</h1>
                                    <p>'.$val['Titre'].'</p>
                                </div>
                                <div class="modal-body" id="contenu">
                                    <div class="form-group">
                                        <label><span class=""></span> Sélectionner l\'image</label>
                                        
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                    <input type="radio" name="Imagechecked" value="img">
                                                </span>
                                            <input type="file" name="Image_Carousel">
                                        </div>
                                        '. $Affichage_Images.'
                                        <input type="hidden" name="Id" value="'.$val['Id_Ticket'].'"/>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-success btn-block" name="submit">
                            </form>
                
                        </div>
                
                    </div>
                </div>';
            $j++;
        }
        $Modal_Fades_Carousel = ob_get_clean();


        $h=1;
        ob_start();
        foreach($donnes_L as $val)
        {
            if($h%2==0)
                $pull = 'left';
            else
                $pull= 'right';

            $image = $imagesBase->getImage($val['Image']);

            echo '
            <hr class="featurette-divider">
            <div class="featurette">';

            if(isset($_SESSION['Administrateur'])) echo'
                <button type="button" class="close" aria-label="Close" onclick="supprTicket(\'accueil\', '.$val['Id_Ticket'].')"><span class="glyphicon glyphicon-remove" style="color:red" aria-hidden="true"></span></button>    
                <!--<button type="button" class="close" aria-label="Close" onclick="modAccuL('.$val['Id_Ticket'].')"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>--> 
            ';

            echo '
                
                <img class="featurette-image pull-'.$pull.'" src="'.$image['lien'].'"  width="400px">
                <h2 class="featurette-heading">'.$val['Titre'].'</h2>
                <p class="lead">'.$val['Contenu'].'</p>
            </div>
            ';

            $h++;
        }
        echo '<hr class="featurette-divider">';
        $featurettes = ob_get_clean();

        $k=1;
        ob_start();
        echo '<div class="row">';
        foreach($donnes_P as $val)
        {
            if($k%3+1==0 && $k!=0)
                echo '</div><div class="row">';

            $image = $imagesBase->getImage($val['Image']);
            if(!(($k%3)==0 && $k!=0))
                echo '
                <div class="col-md-4 col-sm-6" style="border-right: 1px solid black; height: 300px;">';
            else if(($k%3+1)==0)
                echo'
                <div class="col-md-4 col-sm-6" style="border-left: 1px solid black; height: 300px;">';
            else echo '<div class="col-md-4 col-sm-6" style="height: 300px;">';


            if(isset($_SESSION['Administrateur'])) echo'
                <button type="button" class="close" onclick="supprTicket(\'accueil\', '.$val['Id_Ticket'].')" aria-label="Close"><span class="glyphicon glyphicon-remove" style="color:red" aria-hidden="true"></span></button>    
               <!-- <button type="button" class="close" onclick="" aria-label="Close"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>--> 
            ';

            $imageMod = str_replace('/Equain/', '', $image['lien']);

            list($width, $height, $type, $attr) = getimagesize($imageMod);

            if($width>$height)
            {

                echo '
                <div class="row">
                    <a href="'.$image['lien'].'"><img class="img-thumbnail img-responsive" src="'.$image['lien'].'" width="80%" alt=""></a>
                </div>
                <div class="row">
                <h2>'.$val['Titre'].'</h2>
                <p>'.$val['Contenu'].'</p>
                </div>

                ';
            }
            else{
                echo '
                <div class="col-xs-6">
                    <a href="'.$image['lien'].'"><img class="img-thumbnail" src="'.$image['lien'].'" alt="" width="100%" height="140px"></a>
                </div>
                <div class="col-xs-6">
                    <h2>'.$val['Titre'].'</h2>
                    <p>'.$val['Contenu'].'</p>
                </div>
                ';

            }
echo '                </div>
';
            $k++;
        }
        echo '</div>';
        $circles = ob_get_clean();

        if(isset($_POST['Id']) && isset($_POST['Titre_Carousel']) && isset($_POST['Contenu_Carousel']))
        {
            $base->ModCarousel($_POST['Id'], $_POST['Titre_Carousel'], $_POST['Contenu_Carousel']);
            header('Location: index.php');
        }

        if(isset($_FILES['Image_Carousel'])&& isset($_POST['Imagechecked']))
        {
            if($_POST['Imagechecked'] == 'img') {

                if ($_FILES['Image_Carousel']['error'] > 0) echo "<script>console.log('Erreur lors du transfert');</script>";

                $extensions_valides = array('jpg', 'jpeg', 'gif', 'png', 'JPG', 'JPEG', 'PNG');
                //1. strrchr renvoie l'extension avec le point (« . »).
                //2. substr(chaine,1) ignore le premier caractère de chaine.
                //3. strtolower met l'extension en minuscules.
                $extension_upload = strtolower(substr(strrchr($_FILES['Image_Carousel']['name'], '.'), 1));
                if (in_array($extension_upload, $extensions_valides)) echo "<script>console.log('Extension incorrecte');</script>";

                $nom = 'Vue/images/Carousel/' . $_FILES['Image_Carousel']['name'];
                $resultat = move_uploaded_file($_FILES['Image_Carousel']['tmp_name'], $GLOBALS['path'] . $nom);
                if ($resultat) {
                    echo "<script>console.log('Transfert réussi');</script>";
                    $idImage = $imagesBase->addImage($nom);
                    $id =$idImage[0];
                    //$base->ModImage($_POST['Id'], $idImage[0]);
                    //header('Location: index.php');

                } else {
                    echo "FAIL " . $resultat . " " . $nom . ' ' . $_FILES['Image_Carousel']['error'];
                    print_r($_FILES);
                }
            }
            if($_POST['Imagechecked'] != 'img')
                $id = $_POST['Imagechecked'];

            $base->ModImage($_POST['Id'], $id);

            header('Location: index.php');




        }

        if(isset($_POST['Contenu_L']) && isset($_POST['Titre_L']) && isset($_FILES['Image_L']) && isset($_POST['Imagechecked']))
        {

            if($_POST['Imagechecked'] == 'img') {

                if ($_FILES['Image_L']['error'] > 0) echo "<script>console.log('Erreur lors du transfert');</script>";

                $extensions_valides = array('jpg', 'jpeg', 'gif', 'png', 'JPG', 'JPEG', 'PNG');
                //1. strrchr renvoie l'extension avec le point (« . »).
                //2. substr(chaine,1) ignore le premier caractère de chaine.
                //3. strtolower met l'extension en minuscules.
                $extension_upload = strtolower(substr(strrchr($_FILES['Image_L']['name'], '.'), 1));
                if (in_array($extension_upload, $extensions_valides)) echo "<script>console.log('Extension incorrecte');</script>";

                $nom = 'Vue/images/Accueil/' . $_FILES['Image_L']['name'];
                $resultat = move_uploaded_file($_FILES['Image_L']['tmp_name'], $GLOBALS['path'] . $nom);
                if ($resultat) {
                    echo "<script>console.log('Transfert réussi');</script>";
                    $idImage = $imagesBase->addImage($nom);
                    $id=$idImage[0];


                    //$base->setLarge($_POST['Titre_L'], $Contenu, $idImage[0]);

                } else {
                    echo "FAIL " . $resultat . " " . $nom . ' ' . $_FILES['Image_L']['error'];
                    print_r($_FILES);
                }
            }
            if($_POST['Imagechecked'] != 'img')
                $id = $_POST['Imagechecked'];

            $Contenu = str_replace('<p>', '<p class="lead">', $_POST['Contenu_L']);
            $base->setLarge($_POST['Titre_L'], $Contenu, $id);
            header('Location: index.php');




        }

        if(isset($_POST['Contenu_P']) && isset($_POST['Titre_P']) && isset($_FILES['Image_P']) && isset($_POST['Imagechecked']))
        {
            if($_POST['Imagechecked'] == 'img') {

                if ($_FILES['Image_P']['error'] > 0) echo "<script>console.log('Erreur lors du transfert');</script>";

                $extensions_valides = array('jpg', 'jpeg', 'gif', 'png', 'JPG', 'JPEG', 'PNG');
                //1. strrchr renvoie l'extension avec le point (« . »).
                //2. substr(chaine,1) ignore le premier caractère de chaine.
                //3. strtolower met l'extension en minuscules.
                $extension_upload = strtolower(substr(strrchr($_FILES['Image_P']['name'], '.'), 1));
                if (in_array($extension_upload, $extensions_valides)) echo "<script>console.log('Extension incorrecte');</script>";

                $nom = '/Equain/Vue/images/Accueil/' . $_FILES['Image_P']['name'];
                $resultat = move_uploaded_file($_FILES['Image_P']['tmp_name'], $GLOBALS['path'] . $nom);
                if ($resultat) {
                    echo "<script>console.log('Transfert réussi');</script>";
                    $idImage = $imagesBase->addImage($nom);
                    $id=$idImage[0];
                    //$base->setPetit($_POST['Titre_P'], $_POST['Contenu_P'], $idImage[0]);

                } else {
                    echo "FAIL " . $resultat . " " . $nom . ' ' . $_FILES['Image_P']['error'];
                    print_r($_FILES);
                }
            }
            if($_POST['Imagechecked'] != 'img')
                $id = $_POST['Imagechecked'];

            $base->setPetit($_POST['Titre_P'], $_POST['Contenu_P'], $id);
            header('Location: index.php');

        }


?>