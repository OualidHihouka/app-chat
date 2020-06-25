<?php

    session_start(); 

    $dbhost = 'localhost';
    $dbname = 'tchat';
    $dbuser = 'root';
    $dbpswd = '';

    try
    {
        $db = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpswd,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    } 
    catch (PDOexeption $e)
    {
        die("Une erreur est survenue lors de la connection a la base de donnees");
    }

    function isLoged()
    {
        if (isset($_SESSION['tchat']))
        {
            $logged=1;
        }
        else {
            $logged=0;
        }
        return $logged;
    }