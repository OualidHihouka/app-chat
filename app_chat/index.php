<?php  

//CONNECTION AU  BASE DE DONNEE
include 'functions/main-func.php';

    //recupirer tous les contenu d'un dossier pour afficher
    $pages = scandir('pages/');
    //print_r($pages);

    //verifier c'est le lien est coorect par page=...
    if ( isset($_GET['page']) && !empty($_GET['page']) && in_array($_GET['page'].'.php',$pages) )
    {
        $page = $_GET['page'];
    }
    else   
    {
        $page = 'home';
    }


    //functions
    $pages_functions = scandir('functions/');

    if(in_array($page.'.func.php',$pages_functions))
    {
        include 'functions/'.$page.'.func.php';
    }


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>app chat</title>

    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        //addres de lien 
        include 'body/topbar.php';
    ?>
    <div class="container">    
        <?php
            //addres de lien 
            include 'pages/'.$page.'.php';
        ?>
    </div>

    <script src="js/jquery-3.4.1.js"></script>

    <?php
        $pages_js = scandir('js/');
        if(in_array($page.'.func.js',$pages_js))
        {
            ?>
                <script src="js/<?= $page ?>.func.js"></script>
            <?php
        }
    ?>

</body>
</html>