<?php include('header.php'); ?>
  
  <div class="row main-row">
    <ul class="breadcrumbs">
      <li>
          <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
              <a href="/metro-manila/" itemprop="url">
                  <span itemprop="title">Save22 Metro Manila</span>
              </a>
          </div>
      </li>
      <li class="current"><a href="#">Shopping Mall Promos</a></li>
    </ul>
  </div>
  
  <section class="home-preview page">
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