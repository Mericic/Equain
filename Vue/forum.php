<div class="container">

    <div class="row" style="text-align: center">
        <h1>Vous êtes intéressés par un forum covoiturage?</h1>
        <p>Faites le nous savoir!</p>
    </div>
    <div class="row" style="text-align: center; margin: 100px;">
        <span id="bouton"><button  class="btn btn-primary" style="padding:20px" onclick="thumbsup()"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> Ca m'intéresse!</button></span>
        <p class="lead">N'oubliez pas de nous laisser un petit message <a href="index.php?page=LeSiteWeb">ici</a></p>
    </div>
</div>

<script>

    function thumbsup()
    {
        $.get(
            "index.php",
            {page:"thumbsUp", ok: "ok"}
            ).done(function(data){
                $('#bouton').replaceWith('<p class="lead"> Merci!</p>');z
                console.log(data);
        })

    }

</script>