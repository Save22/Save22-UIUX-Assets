<?php require_once('header.php'); ?>
<?php require_once('widgets/notice-shopsmarter.php'); ?>

<div id="content" class="hub">
    <div class="row">
        <div class="two columns">
            <?php require_once('widgets/sidebar-conversion.php'); ?>
        </div>
        <div class="ten columns">

      <!-- CRUMBS NAVIGATION: so people know where they are -->
      <nav id="crumbs">
        <a href="#" class="home">Home</a> &rsaquo; 
        <a href="#">Moms</a> &rsaquo; 
        <a href="#" class="current-page">Diapers</a>
      </nav>

      <h2 class="single-header page-header">Diapers</h2>

        <p>Viewing <strong>1-9</strong> products from <strong>24</strong></p>

      <?php require_once('widgets/featured-diapers.php'); ?>

    </div>
  </div>

</div>
  <?php require_once('widgets/categories.php'); ?>
<?php require_once('footer.php'); ?>
