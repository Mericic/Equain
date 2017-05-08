<?php
header("Content-Type: text/plain");
$reprises= new Model_Reprises();

if(isset($_GET['Id']))
{
    $Id = $_GET['Id'];
    $Infos = $reprises->getRepriseById($Id);
    ob_start();
    foreach ($Infos as $val) {
        $Moniteur = $reprises->getOneMoniteur($val['IdMoniteur']);
        echo '<div class="row col-xs-6">
                        <div class="form-inline">
                            <label >Heure du cours:</label>
                            <p id="Heure">'.$val['Heure'].'</p>

                        </div>
                        <div class="form-inline">
                            <label>Niveau (Galop):</label>
                            <p id="Niveau">'.$val['Niveau'].'</p>
                        </div>
                        <!--<div class="form-inline">
                            <label>Nombre de places</label>
                            <p id="NbPlaces">'.$val['NbPlaces'].'</p>
                        </div>-->
                    </div>
                    <div class="row col-xs-6">
                        <div class="form-inline">
                            <label>Jour</label>
                            <p id="Jour">'.$val['Jour'].'</p>
                        </div>
                        <div class="form-inline">
                            <label>Moniteur</label>
                            <p id="Moniteur">'.$Moniteur['PrenomMoniteur'].'</p>
                        </div>
                        <!--<div class="form-inline">
                            <label >Nb places libres</label>
                            <p id="NbFreePlaces">'.$val['PlacesLibres'].'</p>
                        </div>-->
                    </div>';
    }
    $machin = ob_get_clean();

    echo $machin;
}

?>