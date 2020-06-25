<?php
    if(isLoged() == 0)
    {
        header("Location:index.php?page=signin");
    }
?>

<div class="container1">

    <h2 class="header"><span><i class="fa" aria-hidden="true">&#xf0c0;</i></span> Tous les membres (
<?php $sender = $_SESSION['tchat'];
echo $sender?>)
</h2>


    <?php
        foreach(get_membres() as $membre)
        {
            if($membre->email != $_SESSION['tchat'])
            {
                ?>
                <div class="membre">
                    <strong><?= $membre->name ?></strong><br/>
                    <span><?= $membre->email ?></span><br/>
                    <a class="select" href="index.php?page=tchat&user=<?= $membre->email ?>">
                        <span>
                            <i class="fa" aria-hidden="true">&#xf1d9;</i>
                        </span>
                    </a>
                </div>
                <?php
            }
        }

    ?>
   

</div>    

