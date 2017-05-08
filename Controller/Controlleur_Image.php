<?php

$ImagesBDD = new Model_Images();
$Images = $ImagesBDD->getImage();


    $k=1;
    ob_start();
    echo "
    <div class='container-fluid' style='height: 300px; overflow:auto;'>";
    echo '<div class="row">';
    foreach($Images as $val)
    {
        if($k%3+1==0 && $k!=0)
            echo '</div><div class="row">';
        echo '
        <div class="col-xs-4" style="height: 100px;border: 1px solid grey">
            <input type="radio" name= "Imagechecked" value="'.$val["id_Image"].'">
            <img src="'.$val["lien"].'" alt="'.$val["id_Image"].'"  style="width: 60px;" class="img-responsive">
        </div>
    ';
        $k++;
    }

    echo "</div>
</div>
";

    $Affichage_Images = ob_get_clean();





?>

