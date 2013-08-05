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
            <p class="title tab-promos"><a href="#promos">Promotions</a></p>

              <?php include('elements/list-results.php'); ?>

          </section>
          <section class="section">
            <p class="title tab-stores"><a href="#stores">Stores</a></p>
            <div class="content establishments" data-slug="stores" data-section-content>

              <?php include('elements/results-stores-grid.php'); ?>

            </div>
          </section>
        </div>

      </section>


    </div>
    <div class="small-12 large-3 columns sidebar">
      <?php include('elements/sidebar-subscribe.php'); ?>
      <?php include('elements/sidebar-categories-seo.php'); ?>
    </div>
  </div>

<?php include('elements/lightbox-subscribe.php'); ?>
<?php include('footer.php'); ?>