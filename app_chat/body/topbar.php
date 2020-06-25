<div class="topbar">
    <a href="index.php?page=groupchat" class="app-name <?php echo($page == 'groupchat') ? 'active' : '' ?>">GroupChat</a>
    <span class="menu">

        <?php
            if(isLoged() == 1)
            {
                ?>
                    <a href="index.php?page=membres" class="<?php echo($page == 'membres') ? 'active' : '' ?>">Members</a>
                    <a href="index.php?page=logout">Deconnecter</a>
                <?php
            }
            else
            {
                ?>
                    <a href="index.php?page=register" class="<?php echo($page == 'register') ? 'active' : '' ?>">Inscrire</a>
                    <a href="index.php?page=signin" class="<?php echo($page == 'signin') ? 'active' : '' ?>">Connecter</a>
                <?php
            }

        ?>
                   
    </span>

</div>