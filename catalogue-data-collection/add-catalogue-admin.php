<?php include('header.php'); ?>

  <div class="row">
    <ul class="breadcrumbs">
      <li><a href="main.php">Home</a></li>
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