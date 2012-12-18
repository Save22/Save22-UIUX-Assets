
<div class="content-box">

  <div id="completed-tasks" class="group">
   <?php require_once('pricelist-table-tasks.php'); ?>
  </div>

  <div id="pricesheet-processing-steps">
   <div class="step active">
      <h3>1. Find existing SKU</h3>
      <p>Search for existing SKUs using one of the methods below to avoid duplicate entries. Be very careful with selecting only exact matches. </p>


      <div class="group">
        <div class="half-page">
          <input type="text" class="search" placeholder="Search Model Number">
          <p>no spaces.</p>
        </div>
        <div class="half-page">
          <input type="text" class="search" placeholder="Search Barcode Number">
          <p>the number a barcode gives when scanned.</p>
        </div>
      </div>

   </div>
  </div>

</div><!-- content box -->