

function ModalCarousel(num)
{
    var Titre = $('#Titre_'+num).text();
    var Contenu = $('#Contenu_'+num).text();
    console.log('#Titre_'+num);
    console.log('#Contenu_'+num);
    console.log(Titre +' '+Contenu);
/*    $('#Titre_Carousel').val(Titre);
    $('#Contenu_Carousel').val(Contenu);
*/
    console.log('#Mod_Carousel_'+num);
    $('#Mod_Carousel_'+num).modal('show');
}

window.addEventListener("load", load);

function load()
{
    $('.carousel').carousel({
        interval: 5000
    });
}


function supprTicket(page, id)
{
    console.log("supprTicket()");

    $.get(
        "index.php",
        {page: "suppr", suppr: id}
    ).done(function(data){
        console.log(data);
        document.location.href="index.php?page="+page;
    })
}


function request(id)
{
    $.get(
        "index.php",
        {page: "Infos_Reprises", Id: id}
    ).done(function(Data){
        console.log(Data);
        console.log("test");
        console.log(Data.length);
        $('#contenu').html(Data);
    })
}

