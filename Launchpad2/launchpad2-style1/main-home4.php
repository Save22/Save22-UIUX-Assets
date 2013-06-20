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

  <div id="single-lightbox" class="lightbox">
    <div class="close">
      <a href="#" class="close-lightbox">&times; close</a>
    </div>
    <div class="info">
      <h2>Flipbook title here</h2>
      <h3><a href="#retailer-page">Retailer Name</a></h3>
      <p><span class="expiry">Expiring on <span class="date">June 5, 2013</span></p>
    </div>
    <div class="thumb">
      <img src="flipbook/pages/1-large.jpg">
    </div>
  </div>

<?php include('elements/home-map.php'); ?>


<?php include('footer.php'); ?>