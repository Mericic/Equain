
<!-- MODAL FADES -------------------------------------------------------------------------------------------- -->
<!-- MODAL FADES -------------------------------------------------------------------------------------------- -->

<div class="modal fade" id="connecter" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Connection</h4>
            </div>
            <div class="modal-body" id="contenu" style="height: 200px;">
                <div id="divLogin" class="form-group">
                    <input type="text" id="LoginConnection" placeholder="Login / Adresse Mail" class="form-control">
                </div>
                <div id="divPwd" class="form-group">
                    <input type="password" id="MDPConnection" placeholder="Mot de passe ?" class="form-control">
                </div>

                <button id="btnConnection" class="btn btn-success btn-block" onclick="Connexion()"><span class="glyphicon glyphicon-off"></span> Valider</button>
                <a href="index.php?page=CreationCompte">Créer un compte?</a>
            </div>

        </div>

    </div>
</div>

<div class="modal fade" id="album_new" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Connection</h4>
            </div>
            <div class="modal-body" id="contenu" style="height: 200px;">
                <div id="divLogin" class="form-group">
                    <input type="text" id="LoginConnection" placeholder="Login / Adresse Mail" class="form-control">
                </div>
                <div id="divPwd" class="form-group">
                    <input type="password" id="MDPConnection" placeholder="Mot de passe ?" class="form-control">
                </div>

                <button id="btnConnection" class="btn btn-success btn-block" onclick="Connexion()"><span class="glyphicon glyphicon-off"></span> Valider</button>
                <a href="index.php?page=CreationCompte">Créer un compte?</a>
            </div>

        </div>

    </div>
</div>



<div class="modal fade" id="Ajout_Actu" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <form method="post" role="form" action="index.php?page=Actualite&Nouvelle"  enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><input class="form-control" type="text" name="Titre_Actu" placeholder="Titre"></h4>
                </div>
                <div class="modal-body" id="contenu">
                    <div class="form-group">
                        <div class="col-xs-5">
                            <label><span class=""></span> Sélectionner l'image</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="radio" name="Imagechecked" value="img">
                                </span>
                                <input type="file" name="Image_Actu">
                            </div>
                            <!--<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />-->
                            <?php if(isset($Affichage_Images) && isset($_GET['page']) && $_GET['page']=='Actualite')echo $Affichage_Images;?>
                        </div>
                        <div class="col-xs-7">
                            <label><span class=""></span> Rentrer message</label>
                            <textarea class="form-control" name="Contenu_NewActu" id="Contenu_NewActu" rows="15" type="text" placeholder="Contenu"></textarea>
                        </div>
                            </div>
                    <script>CKEDITOR.replace('Contenu_NewActu'); // Pour utiliser l'éditeur de texte doc ici: http://docs.cksource.com/Main_Page </script>
                </div>
                <input type="submit" class="btn btn-success btn-block" name="submit">
            </form>

        </div>

    </div>
</div>


<div class="modal fade" id="Ajout_Concours" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <form method="post" role="form" action="index.php?page=concours">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><input class="form-control" type="text" name="Titre_Concours" placeholder="Titre"></h4>
                </div>
                <div class="modal-body" id="contenu">
                    <div class="form-group">
                        <div class="col-xs-4">
                            <label>Type de concours</label>
                            <select class="form-control" name="Type">
                                <option selected="selected" value="CCE">CCE</option>
                                <option value="CSO">CSO</option>
                                <option value="Horse-Ball">Horse-Ball</option>
                                <option value="Dressage">Dressage</option>
                            </select>
                            <label>Nombre de Partants</label>
                            <input class="form-control" type="number" name="Participants">

                            <label>Date</label>
                            <input type="text" name="Date" class="form-control" placeholder="JJ-MM-AAAA">
                        </div>
                        <div class="col-xs-8">
                            <label><span class=""></span> Rentrer Présentation</label>
                            <textarea class="form-control" name="Presentation" id="Presentation" rows="15" type="text" placeholder="Presentation"></textarea>
                        </div>
                            </div>
                    <script>CKEDITOR.replace('Presentation'); // Pour utiliser l'éditeur de texte doc ici: http://docs.cksource.com/Main_Page </script>
                </div>
                <input type="submit" class="btn btn-success btn-block" name="submit">
            </form>

        </div>

    </div>
</div>

<div class="modal fade" id="Ajout_Partants" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <form method="post" role="form" action="index.php?page=concours&id=<?php if(isset($_GET['id'])) echo $_GET['id']; ?>">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Ajout d'un partant</h4>
                </div>
                <div class="modal-body" id="contenu">
                    <div class="form-group col-xs-6">
                        <label>Prenom</label><input class="form-control" type="text" name="Prenom">
                        <label>Nom Cheval</label><input class="form-control" type="text" name="Cheval">

                    </div>
                    <div class="form-group col-xs-6">
                        <label>Nom</label><input class="form-control" type="text" name="Nom">
                        <label>Heure Passage</label><input class="form-control" type="text" name="Heure">

                    </div>
                    <input type="hidden" value="<?php if(isset($_GET['id'])) echo $_GET['id']; ?>" name="Id_Concours">
                </div>
                <input type="submit" class="btn btn-success btn-block" name="submit">
            </form>

        </div>

    </div>
</div>

<div class="modal fade" id="Ajout_L" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <form method="post" role="form" action="index.php"  enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><input class="form-control" type="text" name="Titre_L" placeholder="Titre"></h4>
                </div>
                <div class="modal-body" id="contenu">
                    <div class="form-group">
                        <div class="col-xs-4">
                            <label><span class=""></span> Sélectionner l'image</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="radio" name="Imagechecked" value="img">
                                </span>
                                <input type="file" name="Image_L">
                            </div>

                            <!--<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />-->
                            <?php if(isset($page) && $page=='accueil.php')echo $Affichage_Images; else echo $page;?>

                        </div>
                        <div class="col-xs-8">
                            <label><span class=""></span> Rentrer message</label>
                            <textarea class="form-control" name="Contenu_L" id="Contenu_L" rows="15" type="text" placeholder="Contenu"></textarea>
                        </div>
                    </div>
                    <script>CKEDITOR.replace('Contenu_L'); // Pour utiliser l'éditeur de texte doc ici: http://docs.cksource.com/Main_Page </script>
                </div>
                <input type="submit" class="btn btn-success btn-block" name="submit">
            </form>

        </div>

    </div>
</div>

<div class="modal fade" id="Ajout_P" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <form method="post" role="form" action="index.php"  enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><input class="form-control" type="text" name="Titre_P" placeholder="Titre"></h4>
                </div>
                <div class="modal-body" id="contenu">
                    <div class="form-group">
                        <div class="col-xs-4">
                            <label><span class=""></span> Sélectionner l'image</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                        <input type="radio" name="Imagechecked" value="img">
                                    </span>
                                <input type="file" name="Image_P">
                            </div>
                            <!--<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />-->
                            <?php if(isset($page) && $page=='accueil.php')echo $Affichage_Images; else echo $page; ?>

                            </div>
                        <div class="col-xs-8">
                            <label><span class=""></span> Rentrer message</label>
                            <textarea class="form-control" name="Contenu_P" id="Contenu_P" rows="15" type="text" placeholder="Contenu"></textarea>
                        </div>
                    </div>
                    <script>CKEDITOR.replace('Contenu_P'); // Pour utiliser l'éditeur de texte doc ici: http://docs.cksource.com/Main_Page </script>
                </div>
                <input type="submit" class="btn btn-success btn-block" name="submit">
            </form>

        </div>

    </div>
</div>

<!-- MODAL FADES POUR LA MODIFICATION DU CAROUSEL -->

<?php
//Cette variable est définie dans Controller/Controlleur_Accueil.php
if(isset($Modal_Fades_Carousel))
{
    echo $Modal_Fades_Carousel;
}
?>




<!-- FIN MODAL FADES POUR LA MODIFICATION DU CAROUSEL -->

<!-- FIN MODAL FADES -------------------------------------------------------------------------------------------- -->
<!-- FIN MODAL FADES -------------------------------------------------------------------------------------------- -->