<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Equ'Ain</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Vue/CSS/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Vue/CSS/bootstrap-3.3.7-dist/css/bootstrap.min.css.map">
    <link rel="stylesheet" type="text/css" href="Vue/CSS/style.css">
    <script src="Vue/css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Vue/css/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css"></script>
    <script type="text/javascript" src="Vue/css/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css.map"></script>
    <link rel="icon" type="image/png" href="Vue/images/favicon.png" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Vue/Javascript/Gestion_Connexions.js"></script>
    <script src="Vue/ckeditor/ckeditor.js"></script><!-- editeur de texte utilisé dans les tableaux: http://docs.ckeditor.com/# -->
    <script src="Vue/Javascript/Modification_Accueil.js"></script>


</head>

<body>

<header>
    <div class="navbar-wrapper">

    <div class="container" id="lanav">
        <nav class="navbar navbar-inverse ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display-->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php"><img src="Vue/images/logo2.png" class="img-responsive" alt="Menu" style="width: 70px;"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling --->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php"> Accueil</a></li>
                        <li class="dropdown">
                            <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Equ'ain <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.php?page=presentation">Présentation</a></li>
                                <li><a href="index.php?page=reprises">Horaire des Reprises</a></li>
                                <li><a href="index.php?page=organigramme">Organigramme</a></li>
                                <li><a href="index.php?page=activites">Activités</a></li>
                                <li><a href="index.php?page=Label_Qualite">Label Qualite</a></li>
                                <li><a href="index.php?page=poney_Club">Poney Club</a></li>
                            </ul>
                        </li>
                        <li><a href="index.php?page=concours">Concours</a></li>
                        <li><a href="index.php?page=contacts">Contact</a></li>
                        <li class="dropdown visible-sm">
                            <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.php?page=Album_Photo">Album Photo</a></li>
                                <li><a href="index.php?page=Proprietaire">Propriétaire</a></li>
                                <li><a href="index.php?page=Actualite">Actualité</a></li>
                            </ul>
                        </li>
                        <li class="hidden-sm"><a href="index.php?page=Album_Photo">Album Photo</a></li>
                        <li class="hidden-sm"><a href="index.php?page=Proprietaire">Propriétaire</a></li>
                        <li class="hidden-sm"><a href="index.php?page=Actualite">Actualité</a></li>

                       <!-- <li><a href="#connecter" data-toggle="modal"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Connection</a></li>-->
                        <li><?php if(isset($OngletNavBar)){echo $OngletNavBar;}else{echo '<a href="#connecter" data-toggle="modal"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> </a>';}?> </li>

                    </ul>


                </div><!-- /.navbar-collapse ->-->
            </div><!-- /.container-fluid ---->
        </nav>
    </div>

