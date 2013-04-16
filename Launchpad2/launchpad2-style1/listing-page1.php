<?php include('header.php'); ?>
  
  <div class="row main-row">
    <ul class="breadcrumbs">
      <li><a href="#">Save22 Ortigas</a></li>
      <li class="current"><a href="#">Supermarkets</a></li>
    </ul>
  </div>

  <div class="row home-featured main-row">
    <div class="small-12 large-8 columns">

      <section class="section results search-results main-content">

        <header>
          <h2 class="main-header">Supermarkets in Ortigas</h2>
        </header>

        <div class="section-container auto" data-section>
          <section class="section">
            <p class="title"><a href="#panel1">Promos</a></p>
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
                  <a href="#" class="store-link">
                    <img src="img/retailer-abenson.jpg" alt="Retailer Name">
                  </a>
                  <p>
                    <strong>Nearest branch: 3.6km</strong><br>
                    Abenson Ortigas Ave.<br>
                    <a href="#">All branches</a><br>
                  </p>
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
                  <a href="#" class="store-link">
                    <img src="img/retailer-abenson.jpg" alt="Retailer Name">
                  </a>
                  <p>
                    <strong>Nearest branch: 3.6km</strong><br>
                    Abenson Ortigas Ave.<br>
                    <a href="#">All branches &rarr;</a><br>
                  </p>
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
                  <a href="#" class="store-link">
                    <img src="img/retailer-abenson.jpg" alt="Retailer Name">
                  </a>
                  <p>
                    <strong>Nearest branch: 3.6km</strong><br>
                    Abenson Ortigas Ave.<br>
                    <a href="#">All branches &rarr;</a><br>
                  </p>
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
                  <a href="#" class="store-link">
                    <img src="img/retailer-abenson.jpg" alt="Retailer Name">
                  </a>
                  <p>
                    <strong>Nearest branch: 3.6km</strong><br>
                    Abenson Ortigas Ave.<br>
                    <a href="#">All branches &rarr;</a><br>
                  </p>
                </div>
              </div>

            <?php include('elements/pagination.php'); ?>

            </div><!-- content -->

          </section>
          <section class="section">
            <p class="title"><a href="#panel2">Stores</a></p>
            <div class="content">

              <?php include('elements/results-stores.php'); ?>

            </div>
          </section>
        </div>

      </section>


      <?php include_once('elements/footerlinks-popularstores-city.php'); ?>
      <?php include_once('elements/footerlinks-shoppingdestinations.php'); ?>

    </div>
    <div class="small-12 large-4 columns sidebar">
      <?php include_once('elements/sidebar-category-locs.php'); ?>
      <?php include_once('elements/sidebar-promos-locs.php'); ?>

    </div>
  </div>

<?php include('footer.php'); ?>