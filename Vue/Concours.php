


<div class="container">
    <!--<div class="row">
        <?php if(isset($Bouton)) echo $Bouton?>
        <?php if(isset($planningConcours)) echo $planningConcours; ?>

        <?php
        if(isset($Ajout_Partant)) echo $Ajout_Partant;
        if(isset($tableauConcours))
        {
            echo $message;

            echo $tableauConcours;

        } ?>
    </div>-->
    <?php   
    if(!isset($_GET['id']))
    echo '
        <div class="row">
          <a href="Vue/images/Autres/concours2016_2017.jpg"><img class="img-responsive" src="Vue/images/Autres/concours2016_2017.jpg"></a>
        </div>';
    ?>

    <div class="row" style="padding-top: 20px;">
        <h1 class="text-center">Nous sommes fiers de vous présenter nos "Sponsors",<br>Qui nous aident dans la préparation de nos concours ! </h1>
        <img class="img-responsive center-block" src="Vue/images/Autres/sponsors.PNG">
    </div>
</div>

