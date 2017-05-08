<?php
$base = new Model_Messages();


if(isset($_POST['Titre']) && isset($_POST['Contenu']) && isset($_POST['Auteur']) && isset($_POST['Mail']))
{
    if($_POST['Mail']=='')
    {
        $mail='none';
    }else
        $mail=$_POST['Mail'];

    $base->newMessage($_POST['Titre'], $_POST['Contenu'], $_POST['Auteur'], $mail);
    $reçu = '
    <div class="alert alert-success" style="text-align: center">
            <p>Merci ! Nous prendrons en compte votre avis, et vous tiendrons informés.</p>
    </div>
    ';
}


ob_start();

$var = $base->getMessages();

foreach($var as $val)
{
    echo '
    <div class="panel panel-default col-md-offset-2 col-md-8">
          <div class="panel-heading">
           <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
            <h3 class="panel-title">'.$val['Titre'].'</h3>
          </div>
          <div class="panel-body">
    
                <div class="row">
                    '.$val['Contenu'].'
                </div>
            
          </div>
          <div class="panel-footer">
            <p class="col-md-6">Auteur : '.$val['Auteur'].'</p>
            <p class="col-md-6">Adresse Mail : '.$val['Mail'].'</p>
           </div>
    </div>';
}

$tousMessages = ob_get_clean();

?>