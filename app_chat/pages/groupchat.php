<div class="container1">
<?php
    if(isLoged() == 0)
    {
        header("Location:index.php?page=home");
    }

        ?>

            <div class="messages-box">
                
            </div>
</div>
            <div class="buttom">
                <div class="field-area">
                    <textarea name="message" id="message" rows="2" class="textarea field-textarea" placeholder="ecrire votr message"></textarea>
                </div>
                <button type="submit" class="send" id="send1" name="submit">
                    <span>
                        <i class="fa " aria-hidden="true">&#xf1d8;</i>
                    </span>
                </button>
            </div>

        <?php
    
?>


