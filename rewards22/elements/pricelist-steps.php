
<div class="content-box">

  <div id="completed-tasks" class="group">
    <?php require_once('pricelist-table-tasks.php'); ?>
  </div>


  <div id="preview" class="content-group group">
    <?php require_once('loader.php'); ?>
    <?php require_once('pricelist-processing-preview.php'); ?>
  </div>

  <div id="pricesheet-processing-steps" class="content-group group">

  <form class="custom">

   <div class="step active">
      <h3>1. Find existing SKU</h3>
      <p>Search for existing SKUs using one of the methods below to avoid duplicate entries. Be very careful with selecting only exact matches. </p>


      <div class="group find-existing">
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

      <div class="group search-results">

        <label for="radio4"><input name="radio2" type="radio" id="radio4"> Product Title 1<br>
          <span class="scraped-url">http://scrapedurl.com</span>
        </label>
        <label for="radio5"><input name="radio2" CHECKED type="radio" id="radio5"> Product Title 2<br>
          <span class="scraped-url">http://scrapedurl.com</span>
        </label>
        <label for="radio6"><input name="radio2" type="radio" id="radio6"> Product Title 3<br>
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
    <!-- if SKU not found -->
    <div class="alert-box">
      Your SKU is new.
      <a href="" class="close">&times;</a>
    </div>

    <h3>2. You found a new SKU. Add it: </h3>

      <div class="row">
        <div class="two mobile-one columns">
          <label class="right inline">Title</label>
        </div>
        <div class="ten mobile-three columns">
          <input type="text" name="sku_title" placeholder="Title" class="eight" />
        </div>
      </div>

      <div class="row">
        <div class="two mobile-one columns">
          <label class="right inline">Brand</label>
        </div>
        <div class="ten mobile-three columns">
          <input type="text" name="sku_brand" placeholder="Brand" class="eight" />
        </div>
      </div>

      <div class="row">
        <div class="two mobile-one columns">
          <label class="right inline">Description</label>
        </div>
        <div class="ten mobile-three columns">
          <textarea name="sku_desc" class="eight"></textarea>
        </div>
      </div>

      <div class="row">
        <div class="two mobile-one columns">
          <label class="right inline">Category</label>
        </div>
        <div class="ten mobile-three columns">
          <input type="text" name="sku_category" placeholder="Category" class="eight" />
          category is a blah blah blah
          <br><br>
        </div>
      </div>

      <div class="row">
        <div class="two mobile-one columns">
          <label class="right inline">Image Link</label>
        </div>
        <div class="ten mobile-three columns">
          <input type="text" name="sku_image" placeholder="http://" class="eight" />
        </div>
      </div>


  </div>

  <div class="step">
    <div class="alert-box success">
    <!-- if SKU found -->
      <h3>Model: A1428</h3>
      <a href="" class="close">&times;</a>
    </div>
    
    <h3>2/3. Add Buying Option</h3>
    <!-- Right aligned and inline labels -->
      <div class="row">
        <div class="two mobile-one columns">
          <label class="right inline">Price</label>
        </div>
        <div class="ten mobile-three columns">
          <input type="text" placeholder="Price" class="eight" />
        </div>
      </div>
      <div class="row">
        <div class="two mobile-one columns">
          <label class="right inline">Price List Name</label>
        </div>
        <div class="ten mobile-three columns">
          <select id="priceListName">
              <option SELECTED>Choose price list name</option>
              <option>a price list</option>
              <option>b price list</option>
              <option>c price list</option>
              <option>d price list</option>
              <option>e price list</option>
              <option>f price list</option>
              <option>g price list</option>
              <option>h price list</option>
              <option>i price list</option>
          </select>

        </div>
      </div>
      <div class="row">
        <div class="two mobile-one columns">
          <label class="right inline">Store</label>
        </div>
        <div class="ten mobile-three columns">
          <select id="priceListName">
              <option SELECTED>Choose a store</option>
              <option>a store </option>
              <option>b store </option>
              <option>c store </option>
              <option>d store </option>
              <option>e store </option>
          </select>
        </div>
      </div>

    <h3>3/4. Need help here?</h3>

      <div class="row">
        <div class="two mobile-one columns">
          <label class="right inline">Should this entry be rechecked?</label>
        </div>
        <div class="ten mobile-three columns checklist-radio">
          <label for="recheck"><input name="recheck" type="radio" id="recheck"> 
            <strong>Yes</strong>, please recheck this</label>
          <label for="norecheck"><input name="recheck" CHECKED type="radio" id="norecheck"> 
            <strong>No need</strong> to recheck this</label>
        </div>
      </div>

   </div>
  </div><!-- pricesheet-processing-steps -->

  </form>
</div><!-- content box -->