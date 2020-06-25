<?php

    include '../functions/main-func.php';
    $membre = $_SESSION['tchat'];

    $req = $db->query("SELECT * FROM messagesgroup ORDER BY date desc");
    $results = array();

    while($rows = $req->fetchObject())
    {
        $results[] = $rows;
    }

foreach($results as $message)
{
    ?>
        <div class=" message <?php echo ($message->sender == $membre) ? ' message-user' : ' message-membre'?>">
            <span class="sender">
                <?=  $message->sender ?>
            </span>
            <br>
            <span class="messageGroup">
                <?= $message->message ?>
            </span>
        </div>
        
        <br/>
    <?php
}