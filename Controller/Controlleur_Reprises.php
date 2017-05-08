<?php


ob_start();
$PlanningReprise = new Model_Reprises();

if(isset($_POST['Heure']) && isset($_POST['Niveau']) && isset($_POST['Jour']) && isset($_POST['Moniteur']))
{
    $PlanningReprise->addReprise($_POST['Heure'], $_POST['Niveau'], $_POST['Jour'],$_POST['Moniteur']);
}




$semaine = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'];
echo " 
 <table class=\"table\">

    <tr>

        <td style=\"width:5%\"></td>
        <td><h2>Lundi</h2></td>
        <td><h2>Mardi</h2></td>
        <td><h2>Mercredi</h2></td>
        <td><h2>Jeudi</h2></td>
        <td><h2>Vendredi</h2></td>
        <td><h2>Samedi</h2></td>
    </tr>";

for($i = 8; $i<=21; $i++)
{

    echo '<tr>';
        for ($j=0; $j<=6; $j++)
        {

            if($j == 0)
                echo '<td style="width:5%">'.$i.'h</td>';
            else
            {
                $Jour = $semaine[$j-1];
                $reprise = $PlanningReprise->getReprises($i.':00:00', $Jour);
                echo "<td style='height: 60px' class='inline'>";
                if($reprise != NULL) {
                    echo "<p class='thumbnail text-center' style='text-decoration: none; height: 65px; width: 120px;' >Niveau cours :";
                    foreach ($reprise as $val) {
                        echo '<a class="thumbnail col-xs-6" href=\'#Consulter_Cours\' data-toggle=\'modal\' id="Cours_'.$val['Id'].'" onclick="request('.$val['Id'].')">'.$val['Niveau'].'</a>';
                    }
                    echo "</p>";
                }
                    echo "
                    ";
                echo "</td>";


            }
        }
    echo '</tr>';
}
echo "</table>";

$planning = ob_get_clean();

ob_start();
$i =8;
while($i<22)
{
    echo '<option value="'.$i.':00:00">'.$i.' h</option>';
    $i++;
}

$heures = ob_get_clean();

ob_start();

foreach($semaine as $val)
{
    echo '<option value="'.$val.'">'.$val.'</option>';
}


$jour=ob_get_clean();

$niveau = $PlanningReprise->getNiveau();
ob_start();

foreach($niveau as $val)
{
    echo '<option value="'.$val["Galop"].'">'.$val["Galop"].'</option>';
}

$niveau = ob_get_clean();

$moniteur = $PlanningReprise->getAllMoniteur();
ob_start();

foreach ($moniteur as $val)
{
    echo '<option value="'.$val["IdMoniteur"].'">'.$val["PrenomMoniteur"].'</option>';
}
$moniteur = ob_get_clean();
?>