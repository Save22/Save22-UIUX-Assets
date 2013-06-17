<?php include('header.php'); ?>
<a name="popular"></a>
  <section class="home-preview home-content">
    <div class="row main-row">
      <div class="small-12 large-9 columns">
        <h3 class="sub-header"><span class="desc">Popular Promotions</span> <span class="current-category">Supermarkets</span></h3>

          <?php include('elements/grid-featured.php'); ?>

          <a href="#category-link" class="button-minor home-more">view more</a>

        <h3 class="sub-header">Brands</h3>
          <?php include('elements/carousel-brands.php'); ?>
      </div>
      <div class="small-12 large-3 columns">
        
        <?php include('elements/sidebar-categories.php'); ?>

      </div>
    </div>
  </section>

<?php include('elements/home-map.php'); ?>


<?php include('footer.php'); ?>