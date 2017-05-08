<?php

/**
 * Created by PhpStorm.
 * User: Aymeric
 * Date: 01/05/2017
 * Time: 18:05
 */
class forum extends Model
{
    function addOne()
    {
        $req = $this->executerRequete('INSERT INTO forum VALUES (?)', array('1'));
    }
}