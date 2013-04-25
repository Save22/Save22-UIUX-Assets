<?php include('header.php'); ?>

  <div class="row main-row">
    <ul class="breadcrumbs">
      <li><a href="#">Save22 Ortigas</a></li>
      <li class="current"><a href="#">Shopwise Ortigas - Offers and Branches</a></li>
    </ul>
  </div>
  
  <div class="row main-row">
    <div class="small-12 large-8 columns">

      <section class="section results search-results">

        <header>
          <h2 class="main-header">Shopwise in Ortigas</h2>
        </header>

        <div class="section-container auto" data-section>
          <section class="section">
            <p class="title"><a href="#panel1">Offers</a></p>
            <div class="content">

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
                      <a href="#map"><strong>Nearest branch: 3.6km</strong></a><br>
                      Abenson Ortigas Ave.<br>
                      <a href="establishment1-branch.php" class="button-minor details">Store details &amp; operating hours</a>
                    </p>
                  </div><!-- mobile-hide -->

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
                      <a href="#map"><strong>Nearest branch: 3.6km</strong></a><br>
                      Abenson Ortigas Ave.<br>
                      <a href="establishment1-branch.php" class="button-minor details">Store details &amp; operating hours</a>
                    </p>
                  </div><!-- mobile-hide -->
                  
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
                      <a href="#map"><strong>Nearest branch: 3.6km</strong></a><br>
                      Abenson Ortigas Ave.<br>
                      <a href="establishment1-branch.php" class="button-minor details">Store details &amp; operating hours</a>
                    </p>
                  </div><!-- mobile-hide -->
                  
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
                      <a href="#map"><strong>Nearest branch: 3.6km</strong></a><br>
                      Abenson Ortigas Ave.<br>
                      <a href="establishment1-branch.php" class="button-minor details">Store details &amp; operating hours</a>
                    </p>
                  </div><!-- mobile-hide -->
                  
                </div>
              </div>

            <?php include('elements/pagination.php'); ?>

            </div><!-- content -->
          </section>
          <section class="section">
            <p class="title"><a href="#panel2">Branches</a></p>
            <div class="content establishments">

              <?php include('elements/results-stores.php'); ?>
              
            </div>
          </section>
        </div>

      </section>

      <section>

        <h2 class="main-header">Current promos in Ortigas</h2>
        <?php include('elements/carousel-promos.php'); ?>
        
      </section>

      <section class="section results">
        <h2 class="main-header">Shopwise Branches within 2.5km</h2>
        <?php include('elements/carousel-branches.php'); ?>
      </section>

      <?php include('elements/footerlinks-establishment-prodcat.php');?>
      <?php include('elements/footerlinks-establishment-types.php');?>

    </div>
    <div class="small-12 large-4 columns sidebar">
      <?php include('elements/sidebar-related-shops.php');?>
    </div>
  </div>

<?php include('footer.php'); ?>