<?php include('header.php'); ?>
  
  <div class="row home-featured main-row">
    <div class="small-12 large-9 columns main-content">

      <section class="location-ads">
        <h2 class="main-header">Promos near you</h2>
        <div class="map">
          <iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Podium,+Ortigas&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=49.978077,107.226563&amp;ie=UTF8&amp;hq=Podium,+Ortigas&amp;hnear=&amp;radius=15000&amp;ll=14.585837,121.059294&amp;spn=0.007517,0.013089&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=9322337523818707896&amp;output=embed"></iframe>
        </div>
        <div class="promos-near">
          <ul id="featured1" data-orbit>
            <li data-orbit-slide="headline-1">
              <div class="row featured-set">
                <div class="small-6 columns">
                  <div class="featured-promo-thumb">
                    <a href="#">
                      <img src="img/catsample6.jpg" alt="">
                    </a>
                  </div><!-- promo -->
                </div>
                <div class="small-6 columns">
                  <h3>Cold Storage</h3>
                  <span class="nearest"><a href="#">Nearest Branch: 2.5km away</a></a><br>
                  <span class="valid-date">Valid until April 12, 2013</span><br><br>

                  <a href="#" class="button">View Catalogue</a>
                </div>
              </div><!-- row -->
            </li>
            <li data-orbit-slide="headline-2">
              <div class="row featured-set">
                <div class="small-6 columns">
                  <div class="featured-promo-thumb">
                    <a href="#">
                      <img src="img/catsample5.jpg" alt="">
                    </a>
                  </div><!-- promo -->
                </div>
                <div class="small-6 columns">
                  <h3>Cold Storage</h3>
                  <span class="nearest"><a href="#">Nearest Branch: 2.5km away</a></a><br>
                  <span class="valid-date">Valid until April 12, 2013</span><br><br>

                  <a href="#" class="button">View Catalogue</a>
                </div>
              </div><!-- row -->
            </li>
            <li data-orbit-slide="headline-3">
              <div class="row featured-set">
                <div class="small-6 columns">
                  <div class="featured-promo-thumb">
                    <a href="#">
                      <img src="img/catsample4.jpg" alt="">
                    </a>
                  </div><!-- promo -->
                </div>
                <div class="small-6 columns">
                  <h3>Cold Storage</h3>
                  <span class="nearest"><a href="#">Nearest Branch: 2.5km away</a></a><br>
                  <span class="valid-date">Valid until April 12, 2013</span><br><br>

                  <a href="#" class="button">View Catalogue</a>
                </div>
              </div><!-- row -->
            </li>
            <li data-orbit-slide="headline-4">
              <div class="row featured-set">
                <div class="small-6 columns">
                  <div class="featured-promo-thumb">
                    <a href="#">
                      <img src="img/catsample6.jpg" alt="">
                    </a>
                  </div><!-- promo -->
                </div>
                <div class="small-6 columns">
                  <h3>Cold Storage</h3>
                  <span class="nearest"><a href="#">Nearest Branch: 2.5km away</a></a><br>
                  <span class="valid-date">Valid until April 12, 2013</span><br><br>

                  <a href="#" class="button">View Catalogue</a>
                </div>
              </div><!-- row -->
            </li>
            <li data-orbit-slide="headline-5">
              <div class="row featured-set">
                <div class="small-6 columns">
                  <div class="featured-promo-thumb">
                    <a href="#">
                      <img src="img/catsample5.jpg" alt="">
                    </a>
                  </div><!-- promo -->
                </div>
                <div class="small-6 columns">
                  <h3>Cold Storage</h3>
                  <span class="nearest"><a href="#">Nearest Branch: 2.5km away</a></a><br>
                  <span class="valid-date">Valid until April 12, 2013</span><br><br>

                  <a href="#" class="button">View Catalogue</a>
                </div>
              </div><!-- row -->
            </li>
            <li data-orbit-slide="headline-6">
              <div class="row featured-set">
                <div class="small-6 columns">
                  <div class="featured-promo-thumb">
                    <a href="#">
                      <img src="img/catsample4.jpg" alt="">
                    </a>
                  </div><!-- promo -->
                </div>
                <div class="small-6 columns">
                  <h3>Cold Storage</h3>
                  <span class="nearest"><a href="#">Nearest Branch: 2.5km away</a></a><br>
                  <span class="valid-date">Valid until April 12, 2013</span><br><br>

                  <a href="#" class="button">View Catalogue</a>
                </div>
              </div><!-- row -->
            </li>
          </ul>

        </div>
      </section>

    </div>

    <div class="small-12 large-3 columns sidebar">
      <?php include_once('elements/sidebar-hot.php'); ?>
    </div>
  </div>

  <section class="home-preview">

    <div class="row main-row">
      <div class="small-12 large-9 columns">

        <h3 class="sub-header">Brochures</h3>
          <?php include('elements/grid-featured.php'); ?>

        <h3 class="sub-header">Brands</h3>
          <?php include('elements/carousel-brands.php'); ?>

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