<?php
    function user_existe($email,$password)
    {
        global $db;
        $u = array(
            'email' => $email,
            'password' => $password
        );
        $sql = 'SELECT * FROM users WHERE email = :email AND password = :password';
        $req = $db->prepare($sql);
        $req->execute($u);
        //rowCount() nombre de ligne trouver
        $exist = $req ->rowCount($sql);
        //return 0 ou 1 => (0 n'existe pas) ou (1 exise)
        return $exist;
    }
?>