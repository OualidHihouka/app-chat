<div class="container1">
<?php
    if(!isset($_GET['user']) || isLoged() == 0 || user_exist() != 1)
    {
        header("Location:index.php?page=home");
    }

    $_SESSION['user'] = $_GET['user'];
    foreach(get_user() as $user)
    {
        ?>
            <h2 class="header" ><?= $user->name;?></h2>

            <div class="messages-box">
                
            </div>
</div>
            <div class="buttom">
                <div class="field-area">
                    <textarea name="message" id="message" rows="2" class="textarea field-textarea" placeholder="ecrire votr message"></textarea>
                </div>
                <button type="submit" class="send" id="send" name="submit">
                    <span>
                        <i class="fa " aria-hidden="true">&#xf1d8;</i>
                    </span>
                </button>
            </div>

        <?php
    }
?>


