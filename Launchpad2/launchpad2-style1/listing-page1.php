<?php include('header.php'); ?>
  
  <div class="row main-row">
    <ul class="breadcrumbs">
      <li><a href="#">Save22 Ortigas</a></li>
      <li class="current"><a href="#">Supermarkets</a></li>
    </ul>
  </div>

  <div class="row main-row">
    <div class="small-12 large-9 columns">

      <section class="section results main-content">

        <header>
          <h2 class="main-header">Supermarkets in Ortigas</h2>
        </header>

        <div class="section-container tabs" data-section="tabs" data-options="deep_linking: true;">
          <section class="section">
            <p class="title"><a href="#promos">Promotions</a></p>

              <?php include('elements/list-results.php'); ?>

          </section>
          <section class="section seo-page">
            <p class="title"><a href="#stores">Stores</a></p>
            <div class="content establishments" data-slug="stores" data-section-content>

              <?php include('elements/results-stores-grid.php'); ?>

            </div>
          </section>
        </div>

      </section>

      <!--

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

      -->

    </div>
    <div class="small-12 large-3 columns sidebar">
      <!-- 
      <?php include('elements/sidebar-featured-taxonomies.php'); ?>

      <?php include('elements/sidebar-category-locs.php'); ?>
      -->

      <?php include('elements/sidebar-categories.php'); ?>

    </div>
  </div>

<?php include('footer.php'); ?>