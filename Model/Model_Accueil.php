<?php

/**
 * Created by PhpStorm.
 * User: Aymeric
 * Date: 12/03/2017
 * Time: 13:02
 */
class Model_Accueil extends Model
{

    function getCarousel()
    {
        $req= $this->executerRequete('SELECT * FROM ticket WHERE Localisation = "Carousel"');
        return $req->fetchAll();
    }

    function getLarge()
    {
        $req = $this->executerRequete('SELECT * FROM ticket WHERE Localisation ="Accueil-L" ORDER BY Id_Ticket DESC');
        return $req -> fetchAll();
    }

    function getPetit()
    {
        $req = $this->executerRequete('SELECT * FROM ticket WHERE Localisation = "Accueil-P"');
        return $req->fetchAll();
    }

    function setPetit($Titre, $Contenu, $Image)
    {
        $req = $this->executerRequete('INSERT INTO ticket(Localisation, Titre, Contenu, Image) VALUES ("Accueil-P", ?, ?, ?)', array($Titre, $Contenu, $Image));
    }

    function setLarge($Titre, $Contenu, $Image)
    {
        $req = $this->executerRequete('INSERT INTO ticket(Localisation, Titre, Contenu, Image) VALUES ("Accueil-L", ?, ?, ?)', array($Titre, $Contenu, $Image));
    }



    function ModCarousel($id, $Titre, $Contenu)
    {
        $req = $this->executerRequete('UPDATE ticket SET Titre = ?, Contenu = ? WHERE Id_Ticket = ?', array($Titre, $Contenu, $id));
    }

    function ModImage($id, $Image)
    {
        $req = $this->executerRequete('UPDATE ticket SET Image = ? WHERE Id_Ticket = ?', array($Image, $id));
    }


}