<?php include('header.php'); ?>

  <div class="row">
    <ul class="breadcrumbs">
      <li><a href="#">Home</a></li>
      <li><a href="#">ADMIN</a></li>
      <li><a href="admin-retailers.php">Retailers</a></li>
      <li class="current"><a href="admin-add-retailer.php">Add a Retailer</a></li>
    </ul>
  </div>

  <div class="row">
    <div class="small-12 large-12 small-centered columns">

      <header>
        <h2>SM Hypermart</h2>
      </header>
      <div class="section-container auto" data-section data-options="deep_linking: true">
        <section>
          <p class="title" data-section-title><a href="#info">Information</a></p>
          <div class="content" data-section-content data-slug="info">
            <form>
              <h3>Retailer Info</h3>

              <div class="row">
                <div class="small-3 columns">
                  <label for="country" class="right inline">Country</label>
                </div>
                <div class="small-9 columns">
                  <select id="country">
                    <option name="SG" value="SG">SG</option>
                    <option name="PH" value="PH" selected>PH</option>
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

              <div class="row">
                <div class="small-12 large-3 large-centered columns">
                  <input type="submit" value="Save" class="button centered expand">
                </div>
              </div>
            </form>
          </div>
        </section>
        <section>
          <p class="title" data-section-title><a href="#branches">Branches</a></p>
          <div class="content" data-section-content data-slug="branches">
            <form>

              <h3>View Branches</h3>

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
                    <label for="retailer-branch-loc" class="right inline">Location</label>
                  </div>
                  <div class="small-9 columns">
                    <input type="text" name="retailer-branch-loc" placeholder="Address">
                  </div>
                </div><!-- row -->

              </fieldset>

              <a href="#" class="button small secondary">Add another branch</a>

            </form>
          </div>
        </section>
      </div>


    </div>
  </div>
  


  <!-- JS FOR CALENDAR -->
  <script src="js/pikaday.js"></script>
  <script>

    var picker = new Pikaday(
    {
        field: document.getElementById('datepicker'),
        format: 'D MMM YYYY',
        firstDay: 1,
        minDate: new Date('2000-01-01'),
        maxDate: new Date('2020-12-31'),
        yearRange: [2000,2020]
    });

  </script>

<?php include('footer.php'); ?>