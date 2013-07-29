<?php include('header.php'); ?>
<a name="popular"></a>
  <section class="home-preview home-content">
    <div class="row main-row">
      <div class="small-12 large-9 columns">

        <section class="preview-category">
          <h3 class="sub-header"><span class="desc">Restaurants</span> <span class="featured-more right"><a href="#">View more</a></span></h3>

          <?php include('elements/grid-featured.php'); ?>
        </section>

        <section class="preview-category">
          <h3 class="sub-header"><span class="desc">Travel</span> <span class="featured-more right"><a href="#">View more</a></span></h3>

          <?php include('elements/grid-featured.php'); ?>
        </section>

        <section class="preview-category">
          <h3 class="sub-header"><span class="desc">Supermarkets</span> <span class="featured-more right"><a href="#">View more</a></span></h3>

          <?php include('elements/grid-featured.php'); ?>
        </section>

        <section class="preview-brands">
          <h3 class="sub-header">Brands</h3>
          <?php include('elements/carousel-brands.php'); ?>
        </section>

        <?php include('elements/home-map.php'); ?>

      </div>
      <div class="small-12 large-3 columns">
        
        <?php include('elements/sidebar-categories.php'); ?>
        <?php include('elements/sidebar-ad-skyscraper.php'); ?>

      </div>
    </div>
  </section>



<?php include('footer.php'); ?>