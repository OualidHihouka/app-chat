<?php

    include '../functions/main-func.php';
    $user = $_SESSION['user'];
    $membre = $_SESSION['tchat'];

    $req = $db->query("SELECT * FROM messages WHERE (sender ='$membre' AND receiver='$user') OR ( receiver ='$membre' AND sender ='$user') ORDER BY date desc");
    $results = array();

    while($rows = $req->fetchObject())
    {
        $results[] = $rows;
    }

foreach($results as $message)
{
    ?>
        <div class=" message <?php echo ($message->sender == $membre) ? ' message-user' : ' message-membre'?>">
            <?= $message->message ?>
        </div>
        
        <br/>
    <?php
}
