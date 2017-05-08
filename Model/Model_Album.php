<?php

/**
 * Created by PhpStorm.
 * User: Aymeric
 * Date: 01/05/2017
 * Time: 00:03
 */
class Model_Album extends Model
{

    function getAlbum($IdAlbum)
    {
        $req = $this->executerRequete('SELECT * FROM album_photo WHERE IdAlbum = ?', array($IdAlbum));
        return $req->fetchAll();
    }

    //contrairement à getAlbum, cette fonction va permettre de prendre la première image d'un album et
    function getFacade()
    {
        $req =$this->executerRequete('SELECT * FROM album_index');
        return $req->fetchAll();
    }

}