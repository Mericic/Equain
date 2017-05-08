<?php

/**
 * Created by PhpStorm.
 * User: Aymeric
 * Date: 17/03/2017
 * Time: 09:33
 */
class Model_Concours extends Model
{

    function getConcours()
    {
        $req = $this->executerRequete('SELECT * FROM concours');
        return $req->fetchAll();
    }

    function getOneConcours($id)
    {
        $req = $this->executerRequete('SELECT * FROM concours WHERE Id_Concours = ?', array($id));
        return $req->fetch();
    }


    function addConcours($Type, $Titre, $Presentation, $Participants, $Date)
    {
        $req = $this->executerRequete('INSERT INTO concours(Type, Titre, Presentation, Participants, Date) VALUES (?, ?, ?, ?, ?)', array($Type, $Titre, $Presentation, $Participants, $Date));
    }

    function nB_Partants($Id_Concours)
    {
        $req = $this->executerRequete('SELECT COUNT(*) FROM partants WHERE Id_Concours = ?', array($Id_Concours));
        return $req->fetch();
    }

    function getPartants($Id_Concours)
    {
        $req = $this->executerRequete('SELECT * FROM partants WHERE Id_Concours = ?', array($Id_Concours));
        return $req->fetchAll();
    }

    function addPartant($Prenom, $Nom, $Cheval, $Heure_Passage, $Id_Concours)
    {
        $req = $this->executerRequete('INSERT INTO partants(Prenom, Nom, Cheval, Heure_Passage, Id_Concours) VALUES (?, ?, ?, ?, ?)', array($Prenom, $Nom, $Cheval, $Heure_Passage, $Id_Concours));
    }

    function getNiveaux()
    {
        $req=$this->executerRequete('SELECT * FROM niveau_Competition');
        return $req->fetchAll();
    }
}