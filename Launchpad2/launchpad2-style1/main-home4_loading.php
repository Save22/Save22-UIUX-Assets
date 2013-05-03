<?php include('header.php'); ?>
  
  <div class="row home-featured main-row">
    <div class="small-12 large-9 columns main-content">
      <?php include('elements/home-map.php'); ?>
    </div>

    <div class="small-12 large-3 columns sidebar">
      <?php include_once('elements/sidebar-hot.php'); ?>
    </div>
  </div>

  <section class="home-preview">
    <div class="row main-row">
      <div class="small-12 large-9 columns">
        
        <div class="home-preview-content">
          <?php include('elements/loader.php'); ?>

          <h3 class="sub-header">Brochures</h3>
            <?php include('elements/grid-featured.php'); ?>

            <a href="#category-link" class="button-minor home-more">view more</a>

          <h3 class="sub-header">Brands</h3>
            <?php include('elements/carousel-brands.php'); ?>
        </div>

      </div>
      <div class="small-12 large-3 columns">
        
        <?php include('elements/sidebar-categories.php'); ?>

      </div>
    </div>
  </section>

  <br><br>

  <section class="home-new">
    <div class="row main-row">
      <div class="small-12 columns">
        <h2>What's New</h2>
          <?php include('elements/grid-new.php'); ?>
      </div>
    </div>
  </section>

  <div class="row main-row">
    <div class="small-12 columns">

      <?php include_once('elements/footerlinks-popularcategories.php'); ?>

      <section class="section section-links">
        <div class="row">
          <div class="small-12 large-4 columns">
            <h2>Popular Stores in Ortigas</h2>
              <ul class="small-block-grid-1">
                <li><a href="#">Retailer Name in City</a></li>
                <li><a href="#">Retailer Name in City</a></li>
                <li><a href="#">Retailer Name in City</a></li>
                <li><a href="#">Retailer Name in City</a></li>
                <li><a href="#">Retailer Name in City</a></li>
                <li><a href="#">Retailer Name in City</a></li>
                <li><a href="#">Retailer Name in City</a></li>
                <li><a href="#">Retailer Name in City</a></li>
                <li><a href="#">Retailer Name in City</a></li>
                <li><a href="#">Retailer Name in City</a></li>
              </ul>
          </div>
          <div class="small-12 large-8 columns">
            <h2>Popular Shopping Destinations</h2>
              <ul class="small-block-grid-1 large-block-grid-3">
                <li>
                  <h3>City</h3>
                  <ul>
                    <li><a href="#">Makati</a></li>
                    <li><a href="#">Ortigas</a></li>
                    <li><a href="#">Pasay</a></li>
                    <li><a href="#">Taguig</a></li>
                    <li><a href="#">Cebu</a></li>
                    <li><a href="#">Davao</a></li>
                  </ul>
                </li>
                <li>
                  <h3>Neighborhood</h3>
                  <ul>
                    <li><a href="#">Makati</a></li>
                    <li><a href="#">Ortigas</a></li>
                    <li><a href="#">Pasay</a></li>
                    <li><a href="#">Taguig</a></li>
                    <li><a href="#">Cebu</a></li>
                    <li><a href="#">Davao</a></li>
                  </ul>
                </li>
                <li>
                  <h3>Shopping Center</h3>
                  <ul>
                    <li><a href="#">Makati</a></li>
                    <li><a href="#">Ortigas</a></li>
                    <li><a href="#">Pasay</a></li>
                    <li><a href="#">Taguig</a></li>
                    <li><a href="#">Cebu</a></li>
                    <li><a href="#">Davao</a></li>
                  </ul>
                </li>
              </ul>
          </div>
        </div>
      </section>

    </div>
</div>


<?php include('footer.php'); ?>