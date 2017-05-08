<?php

/**
 * Created by PhpStorm.
 * User: Aymeric
 * Date: 07/03/2017
 * Time: 18:47
 */
class Model_Comptes extends Model
{

    public function setUser($Nom, $Prenom, $Login, $Email, $Mdp_hash)
    {
        $req= $this->executerRequete('INSERT INTO utilisateurs(Nom, Prenom, Login, Email, MotDePasse) VALUES(?, ?, ?, ?, ?) ',array($Nom, $Prenom, $Login, $Email, $Mdp_hash) );
    }

    public function verifUser($MDPCo, $LoginCo)
    {
        $req = $this->executerRequete('SELECT id FROM utilisateurs WHERE Login = ? AND MotDePasse = ?', array($LoginCo, $MDPCo));
        return $req ->fetch();
    }

    public function getUser($UserId)
    {
        $req = $this->executerRequete('SELECT * FROM utilisateurs WHERE Id = ?', array($UserId));
        return $req->fetch();
    }
}