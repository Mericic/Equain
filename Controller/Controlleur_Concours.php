<?php
$base = new Model_Concours();

$TousConcours = $base->getConcours();


if(!isset($_GET['id']))
{
    ob_start();

    foreach ($TousConcours as $val)
    {
        $date=date("d-m-Y", strtotime($val['Date']));
        $Nb_Inscrits = $base->nB_Partants($val['Id_Concours']);
        echo '
        <div class="col-md-4">
            <a href="index.php?page=concours&id='.$val['Id_Concours'].'" style="text-decoration: none;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title">'.$val['Titre'].'</h1>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-6">
                        <p>'.$date.'</p>
                        </div>
                        <div class="col-xs-6">
                        <p>Partants : <span class="badge"> '.$Nb_Inscrits[0].'/'.$val['Participants'].'</span></p>
                        </div>
                        
                    </div>
                    <div class="row" style="text-align: center">
                        <p>'.$val['Type'].'</p>
                    </div>
                </div>
            </div>
            </a>
        </div>
        ';
    }


    $planningConcours = ob_get_clean();

}
else
{

    $Partants = $base->getPartants($_GET['id']);
    $i = 1;
    ob_start();

    echo '
<table class="table" style="padding-bottom: 60px;">
    <tr>
        <td>#</td><td>Prénom</td><td>Nom</td><td>Cheval</td><td>Heure Passage</td>';
    if(isset($modifier)) echo '<td></td>';

    echo '
    </tr>';

    foreach($Partants as $val)
    {
        echo '
        <tr>
            <td>'.$i.'</td><td>'.$val['Prenom'].'</td><td>'.$val['Nom'].'</td><td>'.$val['Cheval'].'</td><td>'.$val['Heure_Passage'].'</td>';

        if(isset($modifier)) echo '<td>'.$modifier.'</td>';

        echo '
        </tr>
        ';
        $i++;
    }

    echo '
</table>
    ';
    $tableauConcours =ob_get_clean();

    $var = $base->getOneConcours($_GET['id']);
    $message = '<div class="row" style="margin: 20px;">'.$var['Presentation'].'</div>';


}


if(isset($_POST['Titre_Concours']) &&isset($_POST['Type']) &&isset($_POST['Participants']) && isset($_POST['Presentation']) && isset($_POST['Date']))
{
   // echo 'YOLO '.$_POST['Date'].' '.$date;
    $date= date_format(date_create($_POST['Date']), 'Y-m-d');
    $base->addConcours($_POST['Type'], $_POST['Titre_Concours'], $_POST['Presentation'], $_POST['Participants'], $date);
    header('Location: index.php?page=concours');

}

if(isset($_GET['id']))
{
    if(isset($_POST['Nom']) && isset($_POST['Prenom']) && isset($_POST['Cheval']) && isset($_POST['Heure']) && isset($_POST['Id_Concours']))
    {
        $base->addPartant($_POST['Prenom'], $_POST['Nom'], $_POST['Cheval'], $_POST['Heure'], $_POST['Id_Concours']);
        header('Location: index.php?page=concours&id='.$_GET['id']);
    }
}
?>