<?php require_once('header.php'); ?>

<div id="container">
   <div id="wrap" class="wrap">

      <div id="content" class="content">

        <div class="alert-box alert">
          Woops! You're not logged in!
          <a href="" class="close">&times;</a>
        </div>

        <h1 class="page-header">Price List Update Login</h1>

        <form>
          <div class="row">
            <div class="two mobile-one columns">
              <label class="right inline">username:</label>
            </div>
            <div class="four end mobile-three columns">
              <input type="text" placeholder="username" class="error" />
              <small class="error">sorry, we couldn't find that username</small>
            </div>
          </div>
          <div class="row">
            <div class="two mobile-one columns">
              <label class="right inline">password</label>
            </div>
            <div class="four end mobile-three columns">
              <input type="password" placeholder="password" class="error" />
              <small class="error">sorry, you entered the wrong password</small>
            </div>
          </div>
        </form>
      </div>

   </div>
</div>


<?php require_once('footer.php'); ?>