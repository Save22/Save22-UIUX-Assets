<?php include('header.php'); ?>

  <div class="row">
    <ul class="breadcrumbs">
      <li><a href="main.php">Home</a></li>
      <li><a href="#">ADMIN</a></li>
      <li><a href="admin-retailers.php">Retailers</a></li>
      <li class="current"><a href="admin-add-retailer.php">Add a Retailer</a></li>
    </ul>
  </div>

  <div class="row">
    <div class="small-12 large-12 small-centered columns">

      <section>
        <header>
          <h2>Add a Retailer</h2>
        </header>

        <form>
          <h3>Retailer Info</h3>

          <div class="row">
            <div class="small-3 columns">
              <label for="country" class="right inline">Country</label>
            </div>
            <div class="small-9 columns">
              <select id="country">
                <option name="SG" value="SG">SG</option>
                <option name="PH" value="PH">PH</option>
              </select>
            </div>
          </div><!-- row -->
          <div class="row">
            <div class="small-3 columns">
              <label for="retailer-name" class="right inline">Retailer Name</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="retailer-name" placeholder="Retailer Name">
            </div>
          </div><!-- row -->
          <div class="row">
            <div class="small-3 columns">
              <label for="establishment-types" class="right inline">Establishment Types</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="establishment-types" placeholder="Establishment Types">
            </div>
          </div><!-- row -->
          
          <hr>

          <h3>Retailer Details</h3>

          <div class="row">
            <div class="small-3 columns">
              <label for="retailer-banner" class="right inline">Image Banner</label>
            </div>
            <div class="small-9 columns">
              <input type="file" id="retailer-banner">
            </div>
          </div><!-- row -->

          <div class="row">
            <div class="small-3 columns">
              <label for="retailer-desc" class="right inline">Description</label>
            </div>
            <div class="small-9 columns">
              <textarea name="retailer-desc" class="retailer-desc" style="height: 100px"></textarea>
            </div>
          </div><!-- row -->

          <div class="row">
            <div class="small-3 columns">
              <label for="retailer-meta-desc" class="right inline">Meta Description</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="retailer-meta-desc" placeholder="Meta Description">
            </div>
          </div><!-- row -->

          <div class="row">
            <div class="small-3 columns">
              <label for="retailer-pay" class="right inline">Payment Options</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="retailer-pay" placeholder="Credit Card, Debit, Cash">
            </div>
          </div><!-- row -->

          <div class="row">
            <div class="small-3 columns">
              <label for="retailer-hours" class="right inline">Operating Hours</label>
            </div>
            <div class="small-9 columns">
              <textarea name="retailer-hours" class="retailer-hours" style="height: 100px">
                Weekdays: from ____ to ____

                Weekends: from ___ to ___
              </textarea>
            </div>
          </div><!-- row -->


          <hr>

          <h3>Contact Info</h3>

          <div class="row">
            <div class="small-3 columns">
              <label for="contact-no" class="right inline">Contact Number</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="contact-no" placeholder="Telephone number">
            </div>
          </div><!-- row -->

          <div class="row">
            <div class="small-3 columns">
              <label for="fax-no" class="right inline">Fax Number</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="fax-no" placeholder="Fax number">
            </div>
          </div><!-- row -->

          <div class="row">
            <div class="small-3 columns">
              <label for="contact-email" class="right inline">Email</label>
            </div>
            <div class="small-9 columns">
              <input type="email" id="contact-email" placeholder="Email">
            </div>
          </div><!-- row -->

          <div class="row">
            <div class="small-3 columns">
              <label for="contact-URL" class="right inline">URL</label>
            </div>
            <div class="small-9 columns">
              <input type="url" id="contact-url" placeholder="http://">
            </div>
          </div><!-- row -->

          <hr>

          <h3>Add Branches</h3>

          <?php include('widgets/branches-list-add.php'); ?>

          <a href="admin-add-retailer-branch.php" class="button secondary">Add A New Branch</a>

          <hr>

          <div class="row">
            <div class="small-12 large-3 large-centered columns">
              <input type="submit" value="Add New Retailer" class="button centered expand">
            </div>
          </div>
        </form>

      </section>

    </div>
  </div>
  
  <?php include('widgets/modal-add-branch.php'); ?>

<?php include('footer.php'); ?>