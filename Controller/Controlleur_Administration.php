<?php
$base= new Model_Admin();
$baseImages = new Model_Images();

ob_start();

$AllUsers = array_reverse($base->getUsers());
foreach($AllUsers as $User)
{
    echo '<tr>
        <td>'.$User['Id'].'</td>
        <td>'.$User['Login'].'</td>
        <td>'.$User['Nom'].'</td>
        <td>'.$User['Prenom'].'</td>
        <td>'.$User['Email'].'</td>
        <td>';
    if($User['Droits']==1)
    {
        echo '
            <button class="btn" style="background-color: green">Admin</button>
        </td></tr>';
    }else{
        echo '
            <button class="btn" style="background-color: red">Admin</button>
        </td></tr>
        ';
    }
        ;
}
$utilisateurs = ob_get_clean();

ob_start();

$AllMoniteurs = $base->getMoniteurs();

foreach($AllMoniteurs as $Mono)
{
    echo'
    <tr>
        <td>'.$Mono['IdMoniteur'].'</td>
        <td>'.$Mono['NomMoniteur'].'</td>
        <td>'.$Mono['PrenomMoniteur'].'</td>
        <td>PhotoProfil</td>
    </tr>';
}

$moniteurs = ob_get_clean();


ob_start();

$AllImages = $baseImages -> getImage();

foreach($AllImages as $val)
{
    echo '
         <tr>
            <td>'.$val['id_Image'].'</td>
            <td>'.$val['lien'].'</td>
            <td><a href="'.$val['lien'].'"><img src="'.$val['lien'].'" style="width: 50px;"></a></td>
        </tr>';
}

$tabimages = ob_get_clean();

if(isset($_POST['nom_Mono']) && isset($_POST['Prenom_Mono']) )
{
    $base->addMoniteur($_POST['nom_Mono'], $_POST['Prenom_Mono']);
    header('Location: index.php?page=page_Admin');
}
?>