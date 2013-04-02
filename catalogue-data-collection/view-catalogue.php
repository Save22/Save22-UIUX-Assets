<?php include('header.php'); ?>

  <div class="row">
    <ul class="breadcrumbs">
      <li><a href="main.php">Home</a></li>
      <li class="current"><a href="#">Catalogue Name</a></li>
    </ul>
  </div>

  <div class="row">
    <div class="small-12 large-12 small-centered columns">

      <header>
        <h2><a href="#link-to-catalogue">*Catalogue Title*</a></h2>
      </header>

      <section>
        <form>
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
              <label for="right-label" class="right inline">Retailer</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="right-label" placeholder="Retailer Name">
            </div>
          </div><!-- row -->
          <div class="row">
            <div class="small-3 columns">
              <label for="right-label" class="right inline">Branch</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="right-label" placeholder="Branch Location">
              <a href="#" class="button small radius secondary">add another branch</a>
            </div>
          </div><!-- row -->
          <div class="row">
            <div class="small-3 columns">
              <label for="right-label" class="right inline">Expiry Date</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="datepicker" placeholder="">
              <!-- date picker: https://github.com/dbushell/Pikaday -->
            </div>
          </div><!-- row -->
          <div class="row">
            <div class="small-12 large-3 large-centered columns">
              <input type="submit" value="Save" class="button centered expand">
            </div>
          </div>
        </form>

      </section>

      <section>
        <ul class="large-block-grid-4">
          <li><a class="th radius" href="add-pages-data.php"><img src="img/sample-page.jpg"></a></li>
          <li><a class="th radius" href="add-pages-data.php"><img src="img/sample-page.jpg"></a></li>
          <li><a class="th radius" href="add-pages-data.php"><img src="img/sample-page.jpg"></a></li>
          <li><a class="th radius" href="add-pages-data.php"><img src="img/sample-page.jpg"></a></li>
        </ul>

        <ul class="large-block-grid-4">
          <li><a class="th radius" href="add-pages-data.php"><img src="img/sample-page.jpg"></a></li>
          <li><a class="th radius" href="add-pages-data.php"><img src="img/sample-page.jpg"></a></li>
          <li><a class="th radius" href="add-pages-data.php"><img src="img/sample-page.jpg"></a></li>
          <li><a class="th radius" href="add-pages-data.php"><img src="img/sample-page.jpg"></a></li>
        </ul>

      </section>

      <hr>

      <div class="pagination-centered">
        <ul class="pagination">
          <li class="arrow unavailable"><a href="">&laquo; Previous</a></li>
          <li class="current"><a href="">1</a></li>
          <li><a href="">2</a></li>
          <li><a href="">3</a></li>
          <li><a href="">4</a></li>
          <li class="arrow"><a href="">Next &raquo;</a></li>
        </ul>
      </div>

    </div>
  </div>
  

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