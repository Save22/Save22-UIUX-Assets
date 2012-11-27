<?php require_once('header.php'); ?>
<?php require_once('widgets/notice-shopsmarter_hub.php'); ?>

<div id="content" class="hub">
  <div class="row">
    <div class="twelve columns">

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
  <div id="hub-categories" class="group">
    <div class="row">
      <ul class="nolist" id="cat-list">
        <li class="innercol"><a href="#">diapers</a></li>
        <li class="innercol"><a href="#">wipes</a></li>
        <li class="innercol"><a href="#">changing pads</a></li>
        <li class="innercol"><a href="#">ointments and creams</a></li>
        <li class="innercol"><a href="#">formula and baby food</a></li>
        <li class="innercol"><a href="#">feeding and nursing</a></li>
        <li class="innercol"><a href="#">baby bath</a></li>
      </ul>
    </div>
  </div>
</div>

<?php require_once('footer.php'); ?>
