

<div class="container-fluid">
    
    <div class="row">
        <div class="col-xs-offset-1 col-xs-2">
            <img class="img-responsive" src="Vue/images/Autres/sebastien_sourir.png" alt="sebastien">
        </div>
        <div>
            <p class="lead col-xs-8">Le Horse-Ball fait partie de l'histoire d'Equ'ain.<br>Sébastien n'a t'il pas fait partie de l'équipe de France?<br>
            Mais nous avons aussi du Concours complet d'Equitation, du Concours de Saut d'Obstacles, des Promenades, du Dressage, le dernier arrivé étant le Pony Games.<br>
            Et toutes ces activités dans une structure adaptée.</p>
        </div>
    </div>
    <hr class="featurette-divider">

    <?php if(isset($ticket)) echo $ticket;
          else if(isset($Activite)) echo $Activite;

    ?>

