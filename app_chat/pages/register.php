<?php
    if(isLoged() == 1)
    {
        header("Location:index.php?page=membres");
    }
?>
    
    <div class="container1">
        <div style='text-align: center;'">
            <h1 class="header">S'inscrire</h1>
        </div>

        <?php
            if(isset($_POST['submit']))
            {
                // htmlspecialchars eviter les caracter
                $name = htmlspecialchars(trim($_POST['name']));
                $email = htmlspecialchars(trim($_POST['email']));
                // sha1 : cryptage de password
                $password =  sha1(htmlspecialchars(trim($_POST['password'])));

                if(email_taken($email) == 1)
                {
                    $error_email = "L'adresse email est deja utiliser...";
                }
                else
                {
                    register($name,$email,$password);
                    $_SESSION['tchat'] = $email;
                    header("Location:index.php?page=membres");
                }    

            }
        ?>

        
    <form method="post" id="regForm">    
        <div class="field">
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" id="name" >
        </div>
        
        <div class="field">
            <label  for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" id="email">
        </div>
        
        <div class="field">
            <label  for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password">
        </div>
        
        <div class="field">
            
            <label  for="password_rep"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="password_rep" id="password_rep">
        </div>

        <p class="erreur">
            <?php echo (isset($error_email)) ? $error_email : '' ; ?>
        </p>

        <button type="submit" class="registerbtn" name="submit" >Inscrire</button>

        <div class="signin">
            <p>Already have an account? <a href="index.php?page=signin">Sign in</a>.</p>
        </div>
    </div>
  
</form>
