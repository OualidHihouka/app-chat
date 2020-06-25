<?php
    if(isLoged() == 1)
    {
        header("Location:index.php?page=membres");
    }
?>


<div class="container1">
    <div style='text-align: center;'>
            <h1 class="header">Sign in</h1>
    </div>


    <?php
        if(isset($_POST['submit']))
        {
            // htmlspecialchars eviter les caracter
            $email = htmlspecialchars(trim($_POST['email']));
            // sha1 : cryptage de password
            $password =  sha1(htmlspecialchars(trim($_POST['password'])));

            if(user_existe($email,$password) == 1)
            {
                $_SESSION['tchat'] = $email;
                header("Location:index.php?page=membres");
            }
            else
            {
                $error_user_not_fond = "L'adresse email ou le mote de passe est incorrect";
            }    

        }
    ?>

    <form method="post" id="logForm"> 

        <div class="field">
            <label  for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" id="email">
        </div>
        
        <div class="field">
            <label  for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password">
        </div>

        <p class="erreur">
            <?php 
                echo (isset($error_user_not_fond)) ? $error_user_not_fond : '' ;
            ?>
        </p>

        <button type="submit" class="registerbtn" name="submit" >Se connecter</button>

        <div class="signin">
            <p>I don't have an account? <a href="index.php?page=register">Inscrire</a>.</p>
        </div>
</form>
</div>

