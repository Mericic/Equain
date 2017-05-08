<?php

/**
 * Created by PhpStorm.
 * User: Aymeric
 * Date: 08/03/2017
 * Time: 18:25
 */
class Model_Actualite extends Model
{
    function getActualites()
    {
        //format date: AAAA-MM-JJ
        $req = $this->executerRequete('SELECT * FROM ticket WHERE Localisation = "Actualite"');
        return $req->fetchAll();
    }

    function addActualites( $Titre, $Contenu, $Image)
    {
        $req = $this->executerRequete('INSERT INTO ticket (Localisation, Date_Parution, Titre, Contenu, Image) VALUES ("Actualite",NOW(), ?, ?, ?) ', array($Titre, $Contenu, $Image));
    }
}