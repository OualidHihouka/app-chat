$(document).ready(function(){



    $('#logForm').submit(function(){
        var email = $('#email').val();
        var password = $('#password').val();

        var result = true;

        if(email == "")
        {
            $('#email').parent().addClass('is-focused erreur');
            result = false;
        }
        if(password == "")
        {
            $('#password').parent().addClass('is-focused erreur');
            result = false;
        }

        return result ;
    });

    $('#email').keyup(function(){
        if($('#email').val() == "")
        {
            $('#email').parent().addClass('is-focused erreur');
        }
        else
        {
            $('#email').parent().removeClass('erreur');
        }
    });

    $('#password').keyup(function(){
        if($('#password').val() == "")
        {
            $('#password').parent().addClass('is-focused erreur');
        }
        else
        {
            $('#password').parent().removeClass('erreur');
        } 
    });

});