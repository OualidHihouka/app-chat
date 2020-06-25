<?php
    function email_taken($email)
    {
        global $db;
        $e = array('email' => $email);
        $sql = 'SELECT * FROM users WHERE email = :email';
        $req = $db->prepare($sql);
        $req->execute($e);
        //rowCount() nombre de ligne trouver
        $free = $req ->rowCount($sql);
        //return 0 ou 1 => (0 n'existe pas) ou (1 exise)
        return $free;
    }


    function register($name, $email, $password)
    {
        global $db;
        $r = array(
            'name' => $name,
            'email' => $email,
            'password' => $password
        );
        $sql = "INSERT INTO users(name,email,password) VALUES(:name,:email,:password)";
        $req = $db->prepare($sql);
        $req->execute($r);
    }
