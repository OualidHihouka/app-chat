$(document).ready(function(){

/*afficher le message using ajax*/
    recupMessage();

    /*send message*/
    $('#send').click(function(){
        var message = $('#message').val();
        //ajax
        if(message != '')
        {
            $.post('ajax/post.php',{message:message},function(){
                recupMessage();
                $('#message').val('');
            });
        }
    });

/*afficher le message using ajax*/
function recupMessage(){
    $.post('ajax/recup.php',function(data)
    {
        $('.messages-box').html(data);
    });
}
//exucuter tous seconde
    setInterval(recupMessage,1000);
});