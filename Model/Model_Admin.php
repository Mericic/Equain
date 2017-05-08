<?php

/**
 * Created by PhpStorm.
 * User: Aymeric
 * Date: 26/03/2017
 * Time: 12:09
 */
class Model_Admin extends Model
{
    function getMoniteurs()
    {
        $req = $this->executerRequete('SELECT * FROM moniteur');
        return $req->fetchAll();
    }

    function getOneMoniteur($id)
    {
        $req=$this->executerRequete('SELECT * FROM moniteur WHERE idMoniteur= ? ', array($id));
        return $req->fetch();
    }

    function supprMoniteur($id)
    {
        $req=$this->executerRequete('DELETE FROM moniteur WHERE idMoniteur = ?', array($id));
    }

    function addMoniteur($nom, $prenom, $idImage = NULL)
    {
        $req = $this->executerRequete('INSERT INTO moniteur (NomMoniteur, PrenomMoniteur, id_Image) VALUES (?, ?, ?)', array($nom, $prenom, $idImage));
    }

    function getNiveau()
    {
        $req=$this->executerRequete('SELECT * FROM niveau');
        return $req->fetchAll();
    }

    function getUsers()
    {
        $req=$this->executerRequete('SELECT * FROM utilisateurs');
        return $req->fetchAll();
    }

    function setAdmin($id)
    {
        $req=$this->executerRequete('UPDATE utilisateurs SET DROITS = 1 WHERE Id = ?', array($id));
    }
}
