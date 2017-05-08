

<style>
    table
    {
        margin-top: 30px;
    }

    td{
        width:10%;
    }
    .form-inline
    {
        margin: 5px;
    }

</style>

<script>
/*
Code simplifié dans Modification_Accueil.js (fonction request)
    function infosCours(Data)
    {
        console.log(Data);
        console.log("test");
        console.log(Data.length);
        $('#contenu').html(Data);

    }


    function getXMLHttpRequest() {
        var xhr = null;
        if (window.XMLHttpRequest || window.ActiveXObject) {
            if (window.ActiveXObject) {
                try {
                    xhr = new ActiveXObject("Msxml2.XMLHTTP");
                } catch(e) {
                    xhr = new ActiveXObject("Microsoft.XMLHTTP");
                }
            } else {
                xhr = new XMLHttpRequest();
           }
        } else {
            alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
            return null;
        }
        return xhr;
    }

    function request(callback, id) {
        var xhr = getXMLHttpRequest();

        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
                callback(xhr.responseText);
            }
        };


        var id = encodeURIComponent(id);

        xhr.open("GET", "index.php?page=Infos_Reprises&Id="+id, true);
        xhr.send(null);
    }

    function readData(sData) {
        // On peut maintenant traiter les données sans encombrer l'objet XHR.

        if (sData == "OK") {
            alert("C'est bon");
        } else {
            alert("Y'a eu un problème");
        }
    }*/


</script>


<div class="container">
<?php if(isset($Bouton_AjoutCours))echo $Bouton_AjoutCours ?>


<?php echo $planning; ?>
</div>


<!-- MODAL FADES ------------------------------------------------------------------------------------------ -->
<!-- MODAL FADES ------------------------------------------------------------------------------------------ -->
<!-- MODAL FADES ------------------------------------------------------------------------------------------ -->


<div class="modal fade" id="Ajout_Cours" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Rajouter un cours?</h4>
            </div>
            <div class="modal-body">

                <form role="form" method="post" style="margin: 10px;">
                    <div class="row col-xs-6">
                        <div class="form-inline">
                            <label >Heure du cours:</label>
                            <select name="Heure" class="form-control">
                                <?php echo $heures ?>
                            </select>

                        </div>
                        <div class="form-inline">
                            <label>Niveau (Galop):</label>
                            <select name="Niveau" class="form-control">
                                <?php echo $niveau ?>
                            </select>
                        </div>
                        <!--<div class="form-inline">
                            <label>Nombre de places</label>
                            <input name="NbPlaces" value="0" class="form-control input-sm" style="width: 70px" type="number">
                        </div>-->
                    </div>
                    <div class="row col-xs-6">
                        <div class="form-inline">
                            <label>Jour</label>
                            <select name="Jour" class="form-control">
                                <?php echo $jour ?>
                            </select>
                        </div>
                        <div class="form-inline">
                            <label>Moniteur</label>
                            <select name="Moniteur" class="form-control">
                                <?php echo $moniteur ?>
                            </select>
                        </div>
                        <!--<div class="form-inline">
                            <label >Nb places libres</label>
                            <input name="NbFreePlaces" value="0" class="form-control input-sm" style="width: 70px" type="number">
                        </div>-->
                    </div>


                    <button type="submit" name="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Enregistrer</button>
                </form>

            </div>

        </div>

    </div>
</div>

<!-- Consulation de cours: Page "reprises"-->

<div class="modal fade" id="Consulter_Cours" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Consultation de cours</h4>
            </div>
            <div class="modal-body" id="contenu" style="height: 200px;">

            </div>

        </div>

    </div>
</div>

<!-- -------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------------- -->

<!--
<select class="form-control">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
</select>
-->