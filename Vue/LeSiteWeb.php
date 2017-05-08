


<div class="container">

    <div class="row">
        <?php
        if(isset($tousMessages) && isset($_SESSION['Administrateur'])) echo $tousMessages;
        if(isset($reçu)) echo $reçu;
        ?>
    </div>

    <div class="row">
        <h2 class="text-center">Dites nous ce que vous en pensez!</h2>
        <div class="panel panel-default">
            <form action="index.php?page=LeSiteWeb" method="post">
                <div class="panel-heading">
                    <input class="form-control" type="text" name="Titre" placeholder="Titre du Message">
                </div>
                <div class="panel-body">
                    <textarea class="form-control" name="Contenu" id="Contenu" rows="15" type="text" placeholder="Votre Message"></textarea>
                    <script>CKEDITOR.replace('Contenu'); // Pour utiliser l'éditeur de texte doc ici: http://docs.cksource.com/Main_Page </script>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Votre nom/Pseudo</label>
                            <input class="form-control" type="text" name="Auteur">
                        </div>
                        <div class="col-md-6">
                            <label>Pour vous répondre: Votre mail</label>
                            <input class="form-control"type="email" name="Mail">
                        </div>
                    </div>
                    <input type="submit" style="margin-top: 10px;" class="btn btn-success" name="submit">
                </div>
                <div class="panel-footer text-center">
                    <p class="lead">merci</p>
                </div>

            </form>
        </div>

    </div>


    <div class="row">
        <h2 class="text-center">Un peu de neuf!</h2>
        <div class="text-center">
            <p>Le plus gros changement sur ce nouveau site web est l'utilisation de technologies plus récentes que l'ancien<br>
            Cela permet de rendre le site web "dynamique". C'est à dire qu'il va évoluer, son affichage va changer sans qu'on touche au code source de la page<br>
            Par exemple, le contenu de la page d'accueil, des actualités, des horraires des reprises, etc peuvent être modifiées depuis le site web lui-même, grâce à un compte administrateur.
                <br>Tout ceci aussi simplement que possible<br>

        </div>

    </div>
    <div class="row">
        <h2 class="text-center">Le développeur</h2>
        <div class="text-center">
            <p class="lead">Aymeric Boisard</p>
            <a href="mailto:aymericboi@gmail.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> aymericboi@gmail.com</a>
            <p>DUT Informatique</p>
            <p>Je remercie Sébastien et la direction de m'avoir permis de tester mes connaissances ici. C'est un entraînement intéressant et instructif.</p>
        </div>
    </div>


</div>