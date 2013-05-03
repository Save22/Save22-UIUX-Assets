<?php include('header.php'); ?>
  
  <div class="row main-row">
    <ul class="breadcrumbs">
      <li><a href="#">Save22 Ortigas</a></li>
      <li class="current"><a href="#">Supermarkets</a></li>
    </ul>
  </div>

  <div class="row home-featured main-row">
    <div class="small-12 large-9 columns">

      <section class="section results search-results main-content results-list">

        <header>
          <h2 class="main-header">Supermarkets in Ortigas</h2>
        </header>

        <div class="section-container auto" data-section>
          <section class="section">
            <p class="title"><a href="#panel1">Promotions</a></p>

            <div class="content list-promotions">

              <div class="row item">
                <div class="small-12 large-3 columns">
                  <a href="#catalogue-URL"><img src="img/catsample5.jpg"></a>
                </div>
                <div class="small-12 large-5 columns">
                  <h2><a href="catalogue-URL">Catalogue Title</a></h2>
                  <h3>BRAND NAME</h3>
                  <p>
                    Valid until April 12, 2013
                  </p>

                  <a href="#" class="button">Open Catalogue</a>

                </div>
                <div class="small-12 large-4 columns">

                  <a href="#" class="mobile-only view-shop-info drop-down">View Shop Info <span class="arrow arrow-down"></span></a>

                  <div class="mobile-shop-info mobile-hide">
                    <a href="#" class="store-link">
                      <img src="img/retailer-shopwise.jpg" alt="Retailer Name">
                    </a>
                    <p>
                      <strong>Nearest branch: 3.6km</strong> 
                      <span class="map-link"><a href="#">[map]</a></span><br>
                      Abenson Ortigas Ave.<br>
                      <a href="#">All branches &rarr;</a><br>
                    </p>
                  </div>
                  
                </div>
              </div>

              <div class="row item">
                <div class="small-12 large-3 columns">
                  <a href="#catalogue-URL"><img src="img/catsample1.jpg"></a>
                </div>
                <div class="small-12 large-5 columns">
                  <h2><a href="catalogue-URL">Catalogue Title</a></h2>
                  <h3>BRAND NAME</h3>
                  <p>
                    Valid until April 12, 2013
                  </p>
                  
                  <a href="#" class="button">Open Catalogue</a>

                </div>
                <div class="small-12 large-4 columns">

                  <a href="#" class="mobile-only view-shop-info drop-down">View Shop Info <span class="arrow arrow-down"></span></a>

                  <div class="mobile-shop-info mobile-hide">
                    <a href="#" class="store-link">
                      <img src="img/retailer-shopwise.jpg" alt="Retailer Name">
                    </a>
                    <p>
                      <strong>Nearest branch: 3.6km</strong> 
                      <span class="map-link"><a href="#">[map]</a></span><br>
                      Abenson Ortigas Ave.<br>
                      <a href="#">All branches &rarr;</a><br>
                    </p>
                  </div>
                  
                </div>
              </div>

              <div class="row item">
                <div class="small-12 large-3 columns">
                  <a href="#catalogue-URL"><img src="img/catsample6.jpg"></a>
                </div>
                <div class="small-12 large-5 columns">
                  <h2><a href="catalogue-URL">Catalogue Title</a></h2>
                  <h3>BRAND NAME</h3>
                  <p>
                    Valid until April 12, 2013
                  </p>
                  
                  <a href="#" class="button">Open Catalogue</a>

                </div>
                <div class="small-12 large-4 columns">

                  <a href="#" class="mobile-only view-shop-info drop-down">View Shop Info <span class="arrow arrow-down"></span></a>

                  <div class="mobile-shop-info mobile-hide">
                    <a href="#" class="store-link">
                      <img src="img/retailer-shopwise.jpg" alt="Retailer Name">
                    </a>
                    <p>
                      <strong>Nearest branch: 3.6km</strong> 
                      <span class="map-link"><a href="#">[map]</a></span><br>
                      Abenson Ortigas Ave.<br>
                      <a href="#">All branches &rarr;</a><br>
                    </p>
                  </div>
                  
                </div>
              </div>

              <div class="row item">
                <div class="small-12 large-3 columns">
                  <a href="#catalogue-URL"><img src="img/catsample3.jpg"></a>
                </div>
                <div class="small-12 large-5 columns">
                  <h2><a href="catalogue-URL">Catalogue Title</a></h2>
                  <h3>BRAND NAME</h3>
                  <p>
                    Valid until April 12, 2013
                  </p>
                  
                  <a href="#" class="button">Open Catalogue</a>

                </div>
                <div class="small-12 large-4 columns">

                  <a href="#" class="mobile-only view-shop-info drop-down">View Shop Info <span class="arrow arrow-down"></span></a>

                  <div class="mobile-shop-info mobile-hide">
                    <a href="#" class="store-link">
                      <img src="img/retailer-shopwise.jpg" alt="Retailer Name">
                    </a>
                    <p>
                      <strong>Nearest branch: 3.6km</strong> 
                      <span class="map-link"><a href="#">[map]</a></span><br>
                      Abenson Ortigas Ave.<br>
                      <a href="#">All branches &rarr;</a><br>
                    </p>
                  </div>
                  
                </div>
              </div>

            <?php include('elements/pagination.php'); ?>

            </div><!-- content -->

          </section>
          <section class="section">
            <p class="title"><a href="#panel2">Stores</a></p>
            <div class="content establishments">

              <?php include('elements/results-stores-grid.php'); ?>

            </div>
          </section>
        </div>

      </section>

      <section class="section results">
        <h2 class="main-header">Current Promos in Ortigas 
          <a href="#" class="button right small">view all</a>
        </h2>
        <?php include('elements/carousel-promos.php'); ?>
      </section>

      <section class="section results">
        <h2 class="main-header">Shopwise in neighboring cities of Ortigas</h2>
        <?php include('elements/carousel-branches.php'); ?>
      </section>

    </div>
    <div class="small-12 large-3 columns sidebar">
      <?php include('elements/sidebar-featured-taxonomies.php'); ?>

      <?php include('elements/sidebar-category-locs.php'); ?>
      
      <?php include('elements/sidebar-categories.php'); ?>

    </div>
  </div>

<?php include('footer.php'); ?>