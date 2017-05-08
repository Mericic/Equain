<?php

//Toutes les données ont été vérifiées en JS, il faut maintenant les insérer dans la base.

//Hachage du mot de passe
$base = new Model_Comptes();

if(isset($_POST['password']) && isset($_POST['Nom'])&& isset($_POST['Prenom'])&& isset($_POST['Login'])&& isset($_POST['email']))
{
    $pass_hache = sha1($_POST['password']);
    $base ->setUser($_POST['Nom'], $_POST['Prenom'], $_POST['Login'], $_POST['email'], $pass_hache);
}

if(isset($_POST['MDPCo'])&&isset($_POST['LoginCo']))
{
    $pass_hache= sha1($_POST['MDPCo']);
    $res = $base -> verifUser($pass_hache, $_POST['LoginCo']);
    if(!$res)
    {
        echo 'FALSE';
    }else{
        echo $res[0];
    }
}