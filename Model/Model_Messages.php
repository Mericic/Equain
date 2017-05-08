<?php

/**
 * Created by PhpStorm.
 * User: Aymeric
 * Date: 23/03/2017
 * Time: 12:38
 */
class Model_Messages extends Model
{
    function newMessage($Titre, $Contenu, $Auteur, $Mail)
    {
        $req=$this->executerRequete('INSERT INTO messages(Titre, Contenu, Auteur, Mail) VALUES (?, ?, ?, ?)', array($Titre, $Contenu, $Auteur, $Mail));
    }

    function getMessages()
    {
        $req=$this->executerRequete('SELECT * FROM messages');
        return $req->fetchAll();
    }
}