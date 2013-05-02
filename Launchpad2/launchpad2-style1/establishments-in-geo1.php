<?php include('header.php'); ?>
  
  <div class="row main-row">
    <ul class="breadcrumbs">
      <li><a href="#">Save22</a></li>
      <li><a href="#">Pasig City</a></li>
      <li class="current"><a href="#">Current Offers</a></li>
    </ul>
  </div>
  
  <section class="home-preview">
    <div class="row main-row">
      <div class="small-12 large-9 columns">
        <h2>Current Popular Promos <br>from Shops in <span class="location">Pasig City</span> within 25km</h2>
        <h3 class="sub-header">Brochures</h3>
          <?php include('elements/grid-current-popular.php'); ?>
          <?php include('elements/pagination.php'); ?>
      </div>
      <div class="small-12 large-3 columns">
        
        <?php include('elements/sidebar-categories.php'); ?>

      </div>
    </div>
  </section>


<?php include('footer.php'); ?>