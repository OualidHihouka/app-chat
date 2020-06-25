<?php
    include '../functions/main-func.php';
    $membre = $_SESSION['tchat'];
    $message = htmlspecialchars(trim($_POST['message']));

    $i = array(
        'sender' => $membre, 
        'message' => $message
    );
    $sql = "INSERT INTO messagesgroup(sender,message,date) VALUES(:sender,:message,NOW())";
    $req = $db->prepare($sql);
    $req->execute($i);
