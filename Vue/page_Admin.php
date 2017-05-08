<div class="container-fluid">

<div class="col-sm-6">
    <div class="row">
        <h3>Utilisateurs inscrits</h3>
        <p>Les boutons "Admin" rouge ne sont pas des administrateurs<br>Les boutons "Admin" vert sont des administrateurs</p>
        <table class="table">
            <tr>
                <td>#</td>
                <td>Login</td>
                <td>Nom</td>
                <td>Prenom</td>
                <td>Email</td>
            </tr>
            <?php if(isset($utilisateurs)) echo $utilisateurs; ?>
        </table>
    </div>
    <div class="row">
        <h3>Moniteurs</h3>
        <table class="table">
            <tr>
                <td>#</td>
                <td>Nom</td>
                <td>Prenom</td>
                <td>PhotoProfil</td>
            </tr>
            <?php if(isset($moniteurs)) echo $moniteurs; ?>
        </table>
        <a href="#Ajout_Moniteur" data-toggle="modal">
            <button class="btn btn-default col-xs-12" style="background-color: #f0ad4e">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajouter un Moniteur
            </button>
        </a>
    </div>
</div>

<div class="col-sm-6">
    <div class="row">
        <h3>Images</h3>
        <table class="table">
            <tr>
                <td>#</td>
                <td>Lien</td>
                <td>Image</td>
            </tr>
            <?php if(isset($tabimages)) echo $tabimages; ?>
        </table>
    </div>

</div>


</div>
<div class="modal fade" id="Ajout_Moniteur" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <form method="post" role="form" action="index.php?page=page_Admin"  enctype="multipart/form-data">

                <div class="modal-body" id="contenu">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="nom_Mono">Nom Moniteur</label>
                                <input id="nom_Mono" class="form-control" type="text" name="nom_Mono">
                                <!--<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />-->
                            </div>
                            <div class="col-sm-6">
                                <label>Prenom Moniteur</label>
                                <input class= "form-control" type="text" name="Prenom_Mono">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <label>Photo de Profil</label><p>Note: Pas d'intérêt pour le moment</p>
                                <input type="file" name="Photo_Mono">
                            </div>

                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-success btn-block" name="submit">
            </form>

        </div>

    </div>
</div>