<?php
include_once("Model/Model.php");
include_once ('Model/Model_Reprises.php');
include_once('Model/Model_Comptes.php');
include_once ('Model/Model_Actualite.php');
include_once('Model/Model_Accueil.php');
include_once ('Model/Model_Activites.php');
include_once ('Model/Model_Concours.php');
include_once('Model/Model_Messages.php');
include_once('Model/Model_Ticket.php');
include_once ('Model/Model_Admin.php');
include_once('Model/Model_Images.php');
include_once('Model/Model_Album.php');
$path = "/var/www/html";// H:/logiciels/wamp64/www
// + refaire la gestion des droits


//API_KEY =  AIzaSyD2DPRM8Puk98fs3FsHvxp9L9e1DesHTiI
//key=API_KEY

//Petit script pour afficher une page particulière sur internet explorer
$internetExplorer= $_SERVER['HTTP_USER_AGENT'];
if(strstr($internetExplorer,"MSIE"))
{
    echo "<h1>Ce site web n'est pas compatible avec internet explorer. Vous êtes invités à utiliser mozilla firefox, google Chrome, Opera ou autres </h1>
<p>Copier ce lien dans l'url de firefox: <span  style='background-color: #2db42d'>http://82.241.120.19/Equain/index.php</span></p>
          ";
    exit;
}
// FIN SCRIPT IE - ---------------------------------------------------------------------------

session_start();


if(isset($_POST['UserId']) || isset($_SESSION['UserId']))
{
//    $_SESSION['UserId']= $_POST['UserId'];
    include_once('Controller/Gestion_Session.php');
    include_once('Controller/Controlleur_Image.php');
}


if(isset($_GET["page"]))
{
    switch ($_GET["page"])
    {
        case 'presentation':
            $page='presentation.php';
            include_once ('Vue/layout.php');
            break;
        case 'reprises':
            $page='reprises.php';
            include_once('Controller/Controlleur_Reprises.php');
            include_once ('Vue/layout.php');
            break;
        case 'organigramme':
            $page='organigramme.php';
            include_once ('Vue/layout.php');
            break;
        case'Infos_Reprises':
            include_once('Controller/Infos_Reprises.php');
            break;
        case'CreationCompte':
            //include_once('');
            $page='CreationCompte.php';
            include_once('Vue/layout.php');
            break;
        case 'Controlleur_Creation_Compte':
            include_once('Controller/Controlleur_Gestion_Compte.php');

            if(isset($_POST['password']) && isset($_POST['Nom'])&& isset($_POST['Prenom'])&& isset($_POST['Login'])&& isset($_POST['email']))
            {
                $page='accueil.php';
                include_once('Vue/layout.php');
            }
            break;
        case 'Deconnexion':
            session_destroy();
            header('Location: index.php');
            break;

        case 'mon_Compte':
            $page='mon_Compte.php';
            include_once('Vue/layout.php');
            break;

        case 'Actualite':
            if(isset($_GET['Nouvelle']))
            {
                include_once('Controller/Controlleur_Actualite.php');
                //header('Location: index.php?page=Actualite');
            }else
            {
                include_once('Controller/Controlleur_Actualite.php');
                $page='Actualite.php';
                include_once('Vue/layout.php');
            }
            break;

        case 'activites':
            include_once('Controller/Controlleur_Activites.php');
            $page='activites.php';

            include_once('Vue/layout.php');
            break;

        case 'Album_Photo':
            include_once('Controller/Controlleur_Album.php');
            $page='Album_Photo.php';
            include_once('Vue/layout.php');
            break;
        case 'Proprietaire':
            $page='Proprietaire.php';
            include_once('Vue/layout.php');
            break;
        case 'Poney Club':
            $page='erreur.php';
            include_once('Vue/layout.php');
            break;

        case 'Label_Qualite':
            $page='Label_Qualite.php';
            include_once ('Vue/layout.php');
            break;

        case 'concours':
            include_once ('Controller/Controlleur_Concours.php');
            $page='Concours.php';
            include_once ('Vue/layout.php');
            break;

        case 'contacts':
            $page='contacts.php';
            include_once ('Vue/layout.php');
            break;

        case 'acces':
            $page='acces.php';
            include_once ('Vue/layout.php');
            break;

        case 'poney_Club':
            $page='poney_Club.php';
            include_once ('Vue/layout.php');
            break;
        case 'LeSiteWeb':
            include_once('Controller/Controlleur_Messages.php');
            $page='LeSiteWeb.php';
            include_once ('Vue/layout.php');
            break;

        case 'accueil':
                include_once('Controller/Controlleur_Accueil.php');
                $page='accueil.php';
                include_once ('Vue/layout.php');
           break;

        case 'page_Admin':
            include_once('Controller/Controlleur_Administration.php');
            $page='page_Admin.php';
            include_once ('Vue/layout.php');
            break;

        case 'suppr':
                include_once('Controller/Controlleur_Tickets.php');
            break;

        case 'forum':
                $page='forum.php';
                include_once('Vue/layout.php');
            break;

        case 'thumbsUp':
            include_once('Model/forum.php');
                $base = new forum();
                echo 'prout';
                $base->addOne();
            break;

        default:
            $page='erreur.php';
            include_once('Controller/Controlleur_Accueil.php');
            include_once ('Vue/layout.php');
            break;
    }
}else
{
    include_once('Controller/Controlleur_Accueil.php');
    $page='accueil.php';
    include_once ('Vue/layout.php');
}




?>
