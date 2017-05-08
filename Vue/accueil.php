
    <!-- START THE FEATURETTES -->
<div class="container">

    <div class="row">
        <?php if(isset($Bouton_P))echo $Bouton_P; ?>
        <?php if(isset($circles))echo $circles; ?>
    </div><!-- /.row -->

</div>
    <div class="alert alert-success" style="text-align: center; margin-top: 50px;">
        <p>Ce site web est encore en développement. Merci de votre compréhension.<br>Si vous souhaitez revenir sur l'ancien site web,
            <a href="http://www.equain.fr/EquAin/Accueil.html">cliquez ici</a></p>
        <p>Votre avis nous intéresse! <a href="index.php?page=LeSiteWeb">Ecrivez-nous</a></p></div>



    <div class="container-fluid">
    <?php if(isset($Bouton_L)) echo $Bouton_L?>

    <?php if(isset($featurettes))echo $featurettes; ?>

</div>
<!-- /END THE FEATURETTES -->

