<?php

/**
 * Created by PhpStorm.
 * User: Aymeric
 * Date: 26/03/2017
 * Time: 13:49
 */
class Model_Images extends Model
{
    function addImage($lien)
    {
        $this->executerRequete('INSERT INTO images(lien) VALUES(?)', array($lien));
        $req=$this->executerRequete('SELECT LAST_INSERT_ID()');
        return $req->fetch();
    }

    function getImage($id=NULL)
    {
        if($id != NULL)
        {
            $req=$this->executerRequete('SELECT * FROM images WHERE id_Image= ?', array($id));
            return $req->fetch();
        }else
        {
            $req=$this->executerRequete('SELECT * FROM images');
            return $req->fetchAll();
        }

    }

    function delImage($id)
    {
        $req=$this->executerRequete('DELETE FROM images WHERE id_Image = ?', array($id));
    }

}