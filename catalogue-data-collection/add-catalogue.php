<?php include('header.php'); ?>

  <div class="row">
    <ul class="breadcrumbs">
      <li><a href="#">Home</a></li>
      <li class="current"><a href="add-catalogue">Add a Catalogue</a></li>
    </ul>
  </div>

  <div class="row">
    <div class="small-12 large-12 small-centered columns">

      <section>
        <header>
          <h2>Add a Catalogue</h2>
        </header>

        <form>
          <div class="row">
            <div class="small-3 columns">
              <label for="right-label" class="right inline">Filter by Area</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="filter" placeholder="Country, State, City">
            </div>
          </div><!-- row -->
          <div class="row">
            <div class="small-3 columns">
              <label for="right-label" class="right inline">Retailer</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="right-label" placeholder="Retailer Name">
            </div>
          </div><!-- row -->
          <div class="row">
            <div class="small-3 columns">
              <label for="right-label" class="right inline">Catalogue Title</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="right-label" placeholder="Title">
            </div>
          </div><!-- row -->
          <div class="row">
            <div class="small-3 columns">
              <label for="right-label" class="right inline">Category</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="right-label" placeholder="Category">
            </div>
          </div><!-- row -->
          <div class="row">
            <div class="small-3 columns">
              <label for="right-label" class="right inline">Source</label>
            </div>
            <div class="small-9 columns">
              <select>
                <option>- Select Source -</option>
                <option>Newspaper</option>
                <option>Facebook</option>
                <option>Twitter</option>
                <option>Retailer Website</option>
                <option>Other</option>
              </select>
            </div>
          </div><!-- row -->

          <fieldset>
            <!-- THIS ROW will only appear when a source is selected. Its fields will depend on the type of source. JS code necessary -->
            <section class="source-options">
              <h4>Options</h4>
              
              <div class="row">
                <div class="large-3 small-12 columns">
                  <label class="left inline">Newspaper Name</label>
                </div>
                <div class="large-9 small-12 columns">
                  <select>
                    <option>- Select -</option>
                    <option>Manila Bulletin</option>
                    <option>Philippine Star</option>
                    <option>Inquirer</option>
                    <option>Other</option>
                  </select>
                </div>
              </div><!-- row -->

              <div class="row">
                <div class="large-3 small-12 columns">
                  <label class="left inline">Size of Ad</label>
                </div>
                <div class="large-9 small-12 columns">
                  <select>
                    <option>- Select -</option>
                  </select>
                </div>
              </div><!-- row -->

              <div class="row">
                <div class="large-3 small-12 columns">
                  <label class="left inline">Day of Publication</label>
                </div>
                <div class="large-9 small-12 columns">
                  <select>
                    <option>- Select -</option>
                  </select>
                </div>
              </div><!-- row -->

            </section>
          </fieldset>

          <br><hr>
          <div class="row">
            <div class="small-12 large-3 large-centered columns">
              <input type="submit" value="Add New Catalogue" class="button centered expand">
            </div>
          </div>
        </form>

      </section>

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