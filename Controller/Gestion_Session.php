<?php

$base= new Model_Comptes();

    if(isset($_POST['UserId']))
    {
        $_SESSION['UserId']= $_POST['UserId'];

        $infosUser = $base->getUser($_POST['UserId']);

        $_SESSION['Nom']=$infosUser['Nom'];
        $_SESSION['Prenom']=$infosUser['Prenom'];
        $_SESSION['Email']=$infosUser['Email'];
        if($infosUser['Droits'] == '1')
        {
            $_SESSION['Administrateur']=$_POST['UserId'];
        }
    }

    if(isset($_SESSION['UserId']))
    {
        $OngletNavBar =
            '<a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> '. $_SESSION["Nom"].'<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.php?page=page_Admin" data-toggle="modal">Page Administration</a></li>
                                <li><a href="index.php?page=Deconnexion">Déconnexion</a></li>';
        if(isset($_SESSION['Administrateur']))
        {
            $OngletNavBar .= ' <!--<li><a href="#">Mode Administrateur</a></li></ul>-->';
        }else
        {
            $OngletNavBar .= '</ul>';
        }
    }

    if(isset($_SESSION['Administrateur'])) {

        if(isset($_GET['page']) && $_GET['page']!='accueil')
        {
            switch ($_GET["page"]) {

                case 'Actualite':
                    $Bouton = '
                        <a href="#Ajout_Actu" data-toggle="modal">
                            <button class="btn btn-default col-xs-12" style="background-color: #f0ad4e">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajouter une Actualité
                            </button>
                        </a>';
                break;

                case 'reprises':
                    $Bouton_AjoutCours = '
                        <a href="#Ajout_Cours" data-toggle="modal">
                            <button class="btn btn-default col-xs-12" style="background-color: #f0ad4e">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajouter un cours
                            </button>
                        </a>';
                break;

                case 'concours':
                    if(!isset($_GET['id']))
                    {
                        $Bouton='
                        <a href="#Ajout_Concours" data-toggle="modal">
                            <button class="btn btn-default col-xs-12" style="background-color: #f0ad4e">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajouter un concours
                            </button>
                        </a>
                    ';
                    }else
                    {
                        $Ajout_Partant='
                        <a href="#Ajout_Partants" data-toggle="modal">
                            <button class="btn btn-default col-xs-12" style="background-color: #f0ad4e">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajouter un partant
                            </button>
                        </a>
                    ';
                    }



                    break;


            }
        }else{
            $Boutons_item ='1';

            $Boutons_item2 ='<button class="btn btn-default" onclick="ModalCarousel(2)"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                             <button class="btn btn-default"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></button>';

            $Boutons_item3 ='<button class="btn btn-default" onclick="ModalCarousel(3)"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                             <button class="btn btn-default"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></button>';
            $Bouton_P='
                        <a href="#Ajout_P" data-toggle="modal">
                            <button class="btn btn-default col-xs-12" style="background-color: #f0ad4e">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                            </button>
                        </a>
                    ';
            $Bouton_L='
                        <a href="#Ajout_L" data-toggle="modal">
                            <button class="btn btn-default col-xs-12" style="background-color: #f0ad4e">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                            </button>
                        </a>
                    ';
        }


    }


