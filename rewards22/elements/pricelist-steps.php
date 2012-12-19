
<div class="content-box">

  <div id="completed-tasks" class="group">
   <?php require_once('pricelist-table-tasks.php'); ?>
  </div>

  <div id="pricesheet-processing-steps">

  <form class="custom">

   <div class="step active">
      <h3>1. Find existing SKU</h3>
      <p>Search for existing SKUs using one of the methods below to avoid duplicate entries. Be very careful with selecting only exact matches. </p>


      <div class="group">
        <div class="half-page">
          <input type="text" class="search" placeholder="Search Model Number">
            <p>no spaces.</p>
            <p>Examples: 
               <ul>
                  <li>A1428</li>
                  <li>3276-8</li>
                  <li>K315RED</li>
               </ul>
            </p>
            <p>Common Errors: 
               <ul>
                  <li>K 315RED</li>
                  <li>K315RED</li>
               </ul>
            </p>
        </div>
        <div class="half-page">
          <input type="text" class="search" placeholder="Search Barcode Number">
          <p>the number a barcode gives when scanned.</p>
        </div>
      </div>

   </div>
   <div class="step">
    <h3>SKU Search Result</h3>
    <p>select an existing SKU below if you can find an exact match for the product you're looking at. If not, create a new SKU.</p>

      <div class="group">

        <label for="radio4"><input name="radio2" type="radio" id="radio4"> Radio Button 1<br>
          <span class="scraped-url">http://scrapedurl.com</span>
        </label>
        <label for="radio5"><input name="radio2" CHECKED type="radio" id="radio5"> Radio Button 2<br>
          <span class="scraped-url">http://scrapedurl.com</span>
        </label>
        <label for="radio6"><input name="radio2" type="radio" id="radio6"> Radio Button 3<br>
          <span class="scraped-url">http://scrapedurl.com</span>
        </label>

      </div>

      <div class="group buttons">
        <a class="button radius left">Select SKU<br>&nbsp;</a>
        <span class="left choice-or">or</span>
        <a class="button radius left">Create New SKU <br>
          (if you can't find an exact match)</a>
      </div>

   </div>
   <div class="step">
   </div>
   <div class="step">
   </div>
   <div class="step">
   </div>
   <div class="step">
   </div>
  </div><!-- pricesheet-processing-steps -->

  </form>
</div><!-- content box -->