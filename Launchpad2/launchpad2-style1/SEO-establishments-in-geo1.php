<?php include('header.php'); ?>
  
  <div class="row main-row">
    <ul class="breadcrumbs">
      <li><a href="#">Save22</a></li>
      <li><a href="#">Pasig City</a></li>
      <li class="current"><a href="#">Establishments in Pasig City</a></li>
    </ul>
  </div>
  
  <section class="seo-page page">
    <div class="row main-row">
      <div class="small-12 large-9 columns">
        <h2><span class="location">Pasig City</span> Shops</h2>
        <h3 class="sub-header">Shops</h3>

          <div class="seo-list shops">
          <?php include('elements/seo-stores-grid.php'); ?>
          </div>
          <?php include('elements/pagination.php'); ?>

      </div>
      <div class="small-12 large-3 columns">
        
        <?php include('elements/sidebar-categories.php'); ?>

      </div>
    </div>
  </section>


<?php include('footer.php'); ?>