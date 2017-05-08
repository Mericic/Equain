<?php

/**
 * Created by PhpStorm.
 * User: Aymeric
 * Date: 25/03/2017
 * Time: 17:56
 */
class Model_Ticket extends Model
{
    function delticket($id)
    {
        $req = $this->executerRequete('DELETE FROM ticket WHERE Id_Ticket = ?', array($id));
    }

    function getticket($id)
    {
        $req= $this->executerRequete('SELECT * FROM ticket WHERE Id_Ticket = ?', array($id));
        return $req->fetch();
    }
}