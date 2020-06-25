$(document).ready(function(){

    /*afficher le message using ajax*/
        recupMessage();
    
        /*send message*/
        $('#send1').click(function(){
            var message = $('#message').val();
            //ajax
            if(message != '')
            {
                $.post('ajax/postGroupchat.php',{message:message},function(){
                    recupMessage();
                    $('#message').val('');
                });
            }
        });
    
    /*afficher le message using ajax*/
    function recupMessage(){
        $.post('ajax/recupGroupchat.php',function(data)
        {
            $('.messages-box').html(data);
        });
    }
    //exucuter tous seconde
        setInterval(recupMessage,1000);
    });