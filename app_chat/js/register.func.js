$(document).ready(function(){


    $('#regForm').submit(function(){
        var name = $('#name').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var password_rep = $('#password_rep').val();

        var result = true;

        if(name == "")
        {
            $('#name').parent().addClass('is-focused erreur');
            result = false;
        }
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
        if(password_rep == "")
        {
            $('#password_rep').parent().addClass('is-focused erreur');
            result = false;
        }

        if(password_rep != password)
        {
            $('#password_rep').after("<p class='erreur'>Confirmer password</p>");
            $('#password').parent().addClass('is-focused erreur');
            $('#password_rep').parent().addClass('is-focused erreur');
            result = false;
        }
        return result ;

    });

    $('#name').keyup(function(){
        if($('#name').val() == "")
        {
            $('#name').parent().addClass('is-focused erreur');
        }
        else
        {
            $('#name').parent().removeClass('erreur');
        }
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

    $('#password_rep').keyup(function(){
        if($('#password_rep').val() == "")
        {
            $('#password_rep').parent().addClass('is-focused erreur');
        }
        else
        {
            $('#password_rep').parent().removeClass('erreur');
        }        
    });


});