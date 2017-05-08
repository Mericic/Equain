<?php

/**
 * Created by PhpStorm.
 * User: Aymeric
 * Date: 14/03/2017
 * Time: 21:04
 */
class Model_Activites extends Model
{
    function getActivites()
    {
        $req = $this->executerRequete('SELECT * FROM ticket WHERE Localisation = "Activites"');
        return $req->fetchAll();
    }

    function getParticuliere($id)
    {
        $req = $this->executerRequete('SELECT * FROM ticket WHERE Id_Ticket = ?', array($id));
        return $req -> fetch();
    }

    function addActivite($Titre_Activite, $Contenu_NewActu)
    {
        $req = $this->executerRequete('INSERT INTO ticket (Localisation, Titre, Contenu) VALUES ("Activites", ?, ?)' ,array($Titre_Activite, $Contenu_NewActu));
    }
}