<?php


Class Model_Reprises extends Model
{
    public function getReprises($heure, $jour)
    {
        $req = $this->executerRequete('SELECT * FROM reprises WHERE Heure = ? AND Jour = ?', array($heure, $jour));
        return $req->fetchAll();
    }

    public function getRepriseById($Id)
    {
        $req = $this->executerRequete('SELECT * FROM reprises WHERE Id = ?', array($Id));
        return $req->fetchAll();
    }

    public function addReprise($Heure, $Niveau, $Jour, $Moniteur,  $NbPlaces =0,$NbFreePlaces=0)
    {
        $req = $this->executerRequete('INSERT INTO reprises(Heure, Niveau, NbPlaces, Jour, IdMoniteur, PlacesLibres) VALUES (?, ?, ?, ?, ?, ?)', array($Heure, $Niveau, $NbPlaces, $Jour, $Moniteur, $NbFreePlaces));
    }

    public function getNiveau()
    {
        $req = $this->executerRequete('SELECT * FROM niveau');
        return $req->fetchAll();
    }

    public function getAllMoniteur()
    {
        $req = $this->executerRequete('SELECT * FROM moniteur');
        return $req->fetchAll();
    }

    public function getOneMoniteur($IdMoniteur)
    {
        $req = $this->executerRequete('SELECT * FROM moniteur WHERE IdMoniteur = ?', array($IdMoniteur));
        return $req->fetch();
    }

}


?>