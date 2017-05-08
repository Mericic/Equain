

function Connexion()
{
    var MDPConnection = $('#MDPConnection').val();
    var LoginConnection = $('#LoginConnection').val();
    var Id = [LoginConnection, MDPConnection];
    /*$.ajax({
        type: "POST",
        url:"index.php?page=Controlleur_Creation_Compte",
        data:Id,
        dataType: "json",
        success: function(){
            console.log('test');
        },
        complete: function(){
            console.log('coucou');
        }
    })*/
    $.post(
        'index.php?page=Controlleur_Creation_Compte',
        {
            MDPCo: MDPConnection,
            LoginCo: LoginConnection
        },
        fonction_retour,
        'text'
    );
}

function fonction_retour(valrecue){
    var newval = valrecue.replace(/\n|\r/g, '');//
    if(newval === 'FALSE')
    {
        console.log('retour: False');
        $('#divLogin').attr('class', 'form-group has-error');
        $('#divPwd').attr('class', 'form-group has-error');

    }else
    {
        console.log( valrecue);
        $('#divLogin').attr('class', 'form-group');
        $('#divPwd').attr('class', 'form-group');
        var form = $('<form action="index.php" name="UserIdForm" method="post" style="display:none"><input type="text" name="UserId" value="'+valrecue+'"/></form>');
        $('body').append(form);
        $(form).submit();
    }
    console.log('valrecue '+ newval);
}