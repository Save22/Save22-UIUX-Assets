<?php include('header.php'); ?>

  <div class="row">
    <ul class="breadcrumbs">
      <li><a href="main.php">Home</a></li>
      <li><a href="#">ADMIN</a></li>
      <li><a href="admin-retailers.php">Retailers</a></li>
      <li><a href="admin-add-retailer.php">Retailer</a></li>
      <li class="current"><a href="#">Add Branch</a></li>
    </ul>
  </div>

  <div class="row">
    <div class="small-12 large-12 small-centered columns">

      <section>
        <header>
          <h2>Add a Branch</h2>
        </header>

      <form>

      <fieldset class="add-branch">

        <div class="row">
          <div class="small-3 columns">
            <label for="retailer-branch-title" class="right inline">Title</label>
          </div>
          <div class="small-9 columns">
            <input type="text" name="retailer-branch-title" placeholder="Name of Branch">
          </div>
        </div><!-- row -->

        <div class="row">
          <div class="small-3 columns">
            <label for="retailer-branch-address" class="right inline">Address</label>
          </div>
          <div class="small-9 columns">
            <input type="text" name="retailer-branch-address" placeholder="Address" id="branch-address">
          </div>
        </div><!-- row -->

        <div class="row">
          <div class="small-3 columns">
            <label for="retailer-branch-lnglat" class="right inline">Longitude/Latitude</label>
          </div>
          <div class="small-9 columns">
            <input type="text" id="branchlnglat" class="lnglat" placeholder="Longitude, Latitude">
          </div>
        </div><!-- row -->

      </fieldset>

        <h3>Branch Details</h3>

        <div class="row">
          <div class="small-3 columns">
            <label for="branch-pay" class="right inline">Payment Options</label>
          </div>
          <div class="small-9 columns">
            <input type="text" id="branch-pay" placeholder="Credit Card, Debit, Cash">
          </div>
        </div><!-- row -->

        <div class="row">
          <div class="small-3 columns">
            <label for="branch-hours" class="right inline">Operating Hours</label>
          </div>
          <div class="small-9 columns">
            <textarea name="branch-hours" class="retailer-hours" style="height: 100px">
              Weekdays: from ____ to ____

              Weekends: from ___ to ___
            </textarea>
          </div>
        </div><!-- row -->


        <hr>

        <h3>Contact Info</h3>

        <div class="row">
          <div class="small-3 columns">
            <label for="branch-contact-no" class="right inline">Contact Number</label>
          </div>
          <div class="small-9 columns">
            <input type="text" id="branch-contact-no" placeholder="Telephone number">
          </div>
        </div><!-- row -->

        <div class="row">
          <div class="small-3 columns">
            <label for="branch-fax-no" class="right inline">Fax Number</label>
          </div>
          <div class="small-9 columns">
            <input type="text" id="branch-fax-no" placeholder="Fax number">
          </div>
        </div><!-- row -->

        <div class="row">
          <div class="small-3 columns">
            <label for="branch-contact-email" class="right inline">Email</label>
          </div>
          <div class="small-9 columns">
            <input type="email" id="branch-contact-email" placeholder="Email">
          </div>
        </div><!-- row -->

        <div class="row">
          <div class="small-3 columns">
            <label for="branch-contact-URL" class="right inline">URL</label>
          </div>
          <div class="small-9 columns">
            <input type="url" id="branch-contact-url" placeholder="http://">
          </div>
        </div><!-- row -->

        <hr>

        <div class="row">
          <div class="small-12 large-3 large-centered columns">
            <a href="#" class="button centered expand">Add Branch</a>
          </div>
        </div>
      </form>


    </div>
  </div>
  

<?php include('footer.php'); ?>