<?php require_once('header.php'); ?>
   
<div id="content" class="pw-reset">
    <div class="container">
        <div class="row">
            <div class="eight columns centered">

                <h2>Reset Your Password</h2>

                <form action="" method="post" id="form-resetpw"><div style='display:none'><input type='hidden' name='csrfmiddlewaretoken' value='3942aab4609e43d6fae3edde6a51cbb4' /></div>
                <fieldset>

                    <!-- edit for copy -->
                    <p class="default-message">To reset your password, please enter your email address.</p>

                    <label for="id_email">Email address</label>

                    <input id="id_email" type="text" name="email" maxlength="75" placeholder="your email address" />
                    <input type="submit" value="Reset my password" class="button radius">
                </fieldset>
                </form>

            </div>
        </div>
    </div>
</div>




<?php require_once('footer.php'); ?>